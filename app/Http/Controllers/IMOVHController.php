<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\IMOVH;

class IMOVHController extends Controller
{
    /**
     * Retorna los detalles de un pedido específico
     * 16.XII.2021 - fberrocalm
     * */
    public function show($consecutivo) {
        // $imovhrs = IMOVH::find($consecutivo);
        $imovhrs = IMOVH::select('*')->where('CNSMOV', $consecutivo)->get();

        if (is_object($imovhrs)) {
            $data = [
                'code'   => 200,
                'status' => 'success',
                'items'  => $imovhrs
            ];
        } else {
            $data = [
                'code'   => 404,
                'status' => 'Error',
                'items'  => 'No se encontraron detalles'
            ];
        }

        return response()->json($data, $data['code']);
    }
}
