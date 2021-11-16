<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HPRE extends Model
{
    protected $table = 'HPRE';

    protected $fillable = [
        'NOPRESTACION',
        'NOADMISION',
        'FECHA',
        'IDPLAN',
        'IDAREAH',
        'NIVELATENCION',
        'IDAREA',
        'IDSEDE',
        'ALTOCOSTO',
        'NO_ITEMES',
        'VALORTOTAL',
        'VALORCOPAGO',
        'VALOREXEDENTE',
        'IMPRESO',
        'AUTORIZADOPOR',
        'NUMAUTORIZA',
        'FECHAAUTORIZA',
        'AUTORIZADO',
        'USUARIO',
        'CERRADA',
        'VALORPCOMP',
        'CIRUGIA',
        'PCUBRIMIENTO',
        'CLASEORDEN',
        'CONSECUTIVO',
        'ESDEINV',
        'PEDIDOINV',
        'CNSMOV',
        'INDDEVOLUCION',
        'PREFIJO',
        'CCOSTO',
        'SUBCCOSTO',
        'FINALIDAD',
        'AMBITO',
        'PERSONAL_AT',
        'DXPPAL',
        'DXRELACIONADO',
        'COMPLICACION',
        'FORMAQX',
        'ESCONSULTA',
        'IDAREAEQUIPO',
        'IMPRESOP',
        'IDMEDICO',
        'COBRARA',
        'IDTERCEROCA',
        'CONSECUTIVOHCA',
        'ITEMRED',
        'ENLAB',
        'VALORTOTALCOSTO',
        'OT_SELECCIONADO',
        'OT_REALIZADO',
        'LABO_RESESTADO',
        'HPREID',
        'MEDEXTERNO',
        'MEDEXTERNONOMBRE',
        'OT_REALIZADOCNS',
        'OT_REALIZADOFECHA',
        'PAQUETE',
        'FACTURABLE',
        'IDSERVICIOADM',
        'URGENCIA',
        'DESCUENTO',
        'NOPRESTACIONPAQ',
        'TIPOPRESTACION',
        'FECHAINI',
        'FECHAFIN',
        'ESPAQUETE',
        'GENPAQUETE',
        'TIPOTTEC',
        'TIPOCONTRATO',
        'TIPOSISTEMA',
        'KCNTID',
        'KCNTCAID'
    ];

    public $timestamps = false;

    // Relación de uno a muchos con HPRED
    public function hpred()
    {
        return $this->hasMany('App\HPRED');
    }
}
