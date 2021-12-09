<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Ususu extends Model
{
    use Notifiable;

    protected $table = 'USUSU';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'COMPANIA',
        'USUARIO',
        'CLAVE',
        'NOMBRE',
        'GRUPO',
        'TIPO',
        'IDMEDICO',
        'NIVELFUNCIONARIO',
        'CODCAJERO',
        'SYS_ComputerName',
        'MMAREA',
        'TIPOMANEJOAREA',
        'IDAREA',
        'IDTERCERO',
        'FECHACAMBIO',
        'ESTADO',
        'CONCILIA',
        'CCOSTO',
        'SUBCCOSTO',
        'MBODEGA',
        'IDBODEGA',
        'IDBODEGA2',
        'IDBODEGANOCHE',
        'IDSEDE',
        'IDBODEGACONSUMO',
        'DEPURAR',
        'AFILTROAREADMUSR',
        'PSUPERVISOR',
        'GRUPOEXT',
        'CLAVEEXT',
        'PEDIRCAMBIOCLAVE',
        'CLIPBOARD',
        'MMSEDES',
        'MULTISESIONES'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'CLAVE', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
