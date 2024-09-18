<?php
    namespace App\Helpers;

    use Firebase\JWT\JWT;
    use Illuminate\Support\Facades\DB;
    use App\Ususu;

    class JwtAuth {

        public $secret;

        public function __construct() {
            $this->secret = 'Palabra clave sistema Clintos 20211124';
        }

        /**
         * Genera token de autenticación de usuarios
         * 24.nov.2021 - fberrocalm
         * @param $usuario
         * @param $password
         * @param $getToken
         * @return $data
         */
        public function signup($usuario, $password, $getToken = null) {

            $user = Ususu::where([
                'USUARIO' => $usuario,
                'CLAVE'   => $password
            ])->first();

            $signup = false;
            if (is_object($user)) {
                $signup = true;
            }

            if ($signup) {
                $token = array(
                    'sub'       => $user->USUARIO,
                    'compania'  => $user->COMPANIA,
                    'name'      => $user->NOMBRE,
                    'iduser'    => $user->IDMEDICO,
                    'iat'       => time(),
                    'exp'       => time() + (7 * 24 * 60 *60)
                );

                $jwt     = JWT::encode($token, $this->secret, 'HS256');
                $decoded = JWT::decode($jwt, $this->secret, ['HS256']);

                if (is_null($getToken)) {
                    $data = $jwt;
                } else {
                    $data = $decoded;
                }
            } else {
                $data = array(
                    'status' => 'Error',
                    'message' => 'Usuario o Clave incorrectos',
                    'code' => 404
                );
            }

            return $data;
        }

        /**
         * Valida la autenticidad del token recibido
         * 10.XII.2021 - fberrocalm
         */
        public function checkToken($jwt, $getIdentity=false) {
            $auth    = false;

            try {
                $jwt     = str_replace('"', '', $jwt);
                $decoded = JWT::decode($jwt, $this->secret, ['HS256']);

                if (!empty($decoded) && is_object($decoded) && isset($decoded->sub)) {
                    $auth = true;
                } else {
                    $auth = false;
                }
            } catch (\UnexpectedValueException $e) {
                $auth = false;
            } catch (\DomainException $e) {
                $auth = false;
            }

            if ($getIdentity) {
                return $decoded;
            }

            return $auth;
        }

    }
