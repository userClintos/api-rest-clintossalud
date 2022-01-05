<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IMOV;
use App\IMOVH;

class IMOVController extends Controller
{

    /**
     * Retorna los detalles de un pedido a farmacia
     * 04.Enero.2022
     */
    public function detallePedido($consecutivo) {
        // $imov = IMOV::find($consecutivo); [No funciona ya que la tabla IMOV no tiene un campo (id)]
        $imov = IMOV::select('*')->where('CNSMOV', $consecutivo)->get();

        if (is_object($imov)) {
            // $detalles = $imov->imovh(); [No funciona debido a que las relaciones en la BD no están bien definidas]
            $detalles = IMOVH::select('*')->where('CNSMOV', $consecutivo)->get();

            if (is_object($detalles)) {
                $data = [
                    'code'   => 200,
                    'status' => 'success',
                    'orden'  => $imov,
                    'items'  => $detalles
                ];
            } else {
                $data = [
                    'code'   => 404,
                    'status' => 'Error',
                    'items'  => 'No se encontraron detalles del pedido a farmacia número ' . $consecutivo
                ];
            }

        } else {
            $data = [
                'code'   => 404,
                'status' => 'Error',
                'items'  => 'No se encontró el pedido a farmacia número ' . $consecutivo
            ];
        }

        return response()->json($data, $data['code']);
    }
}
