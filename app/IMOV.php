<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IMOV extends Model
{
    protected $table = 'IMOV';

    protected $fillable = [
        'CNSMOV',
        'IDBODEGA',
        'IDTIPOMOV',
        'NODOCUMENTO',
        'TIPODOCU',
        'FECHAMOV',
        'CCOSTO',
        'IDSOLICITA',
        'IDTERCERO',
        'IDFUNCIONARIO',
        'IDRECIBE',
        'FACTORVENTA',
        'ESTADO',
        'IDBODEGAEXTERNA',
        'CNSTRAN',
        'OBSERVACION',
        'CNSFCOM',
        'SUBIOCOMPRA',
        'NOPRESTACION',
        'IDAREA',
        'CONTABILIZADA',
        'NROCOMPROBANTE',
        'PROCEDENCIA',
        'USUARIO',
        'USUARIOCONF',
        'FECHACONF',
        'PARCIAL',
        'IDAREAH',
        'NIVELATENCION',
        'SYS_ComputerName',
        'TIENECAMBIO',
        'IDITAR',
        'ESTRANSITO',
        'CNSREP',
        'CNSIDEV',
        'IDDEP',
        'CNSITRA',
        'SECONTABILIZA',
        'F_FACTURA',
        'F_VENCE',
        'MARCACONT',
        'VLR_FLETE',
        'CODUNG',
        'CODPRG',
        'VRFACTURADO',
        'NOGENERACIONOPS',
        'idtty',
        'PROCESO',
        'IDBODEGAORIGINAL',
        'NUMMESESENTREGA',
        'NUMENTREGA',
        'F_INIENTREGA',
        'TIPOVENTA',
        'NUMDOCUMENTODX'
    ];

    public $timestamps = false;

    // Relación de uno a muchos con IMOVH
    public function imovh() {
        return $this->hasMany('App\IMOVH');
    }
}
