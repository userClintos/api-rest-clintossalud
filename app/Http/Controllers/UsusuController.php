<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsusuController extends Controller
{
    /**
     * Registro de nuevos usuarios
     * 24.Nov.2021 - fberrocalm
     */
    public function register(Request $request) {
    }

    /**
     * Login de usuarios en el sistema
     * 24.Nov.2021 - fberrocalm
     */
    public function login(Request $request) {
        $jwtAuth      = new \JwtAuth();
        $json         = $request->input('json', null);
        $params       = json_decode($json);
        $params_array = json_decode($json, true);

        $validate = \Validator::make($params_array, [
            'usuario'  => 'required',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            $signup = array(
                'status'  => 'Error',
                'code'    => 404,
                'message' => 'El usuario y password son requeridos',
                'errors'  => $validate->errors()
            );
        } else {
            $claveEncriptada = $this->codificar($params->password);

            if (!empty($params->gettoken)) {
                $signup      = $jwtAuth->signup($params->usuario, $claveEncriptada, true);
            } else {
                $signup      = $jwtAuth->signup($params->usuario, $claveEncriptada);
            }
        }
        // $ususario = "AGALVIS"; $pass = "1ccb";
        return response()->json($signup, 200);
    }

    /**
     * Encripta la palabra recibida como parámetro
     * 25.Nov.2021 - fberrocalm
     */
    public function codificar($password) {
        $claveLimpia = "";
	    $encriptada  = "";
	    $char1		 = 0;
	    $char2		 = 0;

        $claveLimpia = substr(strtolower(trim($password)), 0, 8);

        for($i=0; $i<strlen($claveLimpia); $i++) {
            $char1 = ord($claveLimpia[$i]);

            if($char1 >= 48 && $char1 <= 57) {
                $char2 = $char1 - 31;
            } else {
                $char2 = $char1 - 63;
            }

            $encriptada .= chr($char2);
        }

        return $encriptada;
    }

    public function update(Request $request) {
        /*
        $token      = $request->header('Authorization');
        $jwtAuth    = new \JwtAuth();
        $chekcToken = $jwtAuth->checkToken($token);

        if ($chekcToken) {
            // En caso de que el token resulte válido se continúa con el proceso requerido
            echo "<h1>Login correcto</h1>";
        } else {
            // En caso de que el token no sea válido se retorna un mensaje de error
            echo "<h1>Login incorrecto</h1>";
        }
        */

        echo "<h1>Login correcto</h1>";
        die();
    }
}
