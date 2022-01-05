<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IMOVH extends Model
{
    protected $table = 'IMOVH';

    protected $fillable = [
        'CNSMOV',
        'IDARTICULO',
        'EXISTENCIA',
        'CANTIDAD',
        'CANTPEDIDA',
        'PCOSTO',
        'NOLOTE',
        'NOLOTEPEDIDO',
        'FECHAVENCE',
        'ESTADO',
        'IDARTICULOTF',
        'CANTIDADTF',
        'PCOSTOANTES',
        'CNSTRAN',
        'ITEM',
        'PVENTA',
        'USUARIO',
        'USUARIOCONF',
        'FECHACONF',
        'PRIEXI',
        'FECHAREPOSI',
        'IDARTICULOORI',
        'CANTIDADORI',
        'TIENECAMBIO',
        'DETALLE',
        'CANT_EN_ACTIVOS',
        'ENCXP',
        'PIVA',
        'VLRIVA',
        'PDTO',
        'VLRDTO',
        'CNSHTX',
        'VRFACTURADO',
        'CANTPEDIDA_ORI',
        'PROCESO',
        'IDREGISTROORI',
        'IMOVHID',
        'HPREDID',
        'DEVOLUCIONES',
        'IMOVHID_DESP',
        'IDEVDID'
    ];

    public $timestamps = false;

    public function imov() {
        return $this->belongsTo('App\IMOV', 'CNSMOV');
    }
}
