<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HPRE;
use App\HPRED;

class PruebasController extends Controller
{
    public function animales() {
        $ordenes = ['Perro', 'Gato', 'Loro'];
        var_dump($ordenes);
        die();
    }

    public function testOrm() {
        $hpres = HPRE::all();
        $cont  = 1;

        foreach ($hpres as $hpre){
            echo "<p>" . $hpre->NOPRESTACION . "</p>";

            if ($cont > 10 ) {
                break;
            }
            $cont++;
        }

        die();
    }
}
