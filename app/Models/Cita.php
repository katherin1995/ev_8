<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita
 * @package App\Models
 * @version October 5, 2021, 10:02 pm UTC
 *
 * @property integer $idpaciente
 * @property string|\Carbon\Carbon $fecha_cita
 * @property integer $iddoctor
 */
class Cita extends Model
{
    //use SoftDeletes;
    protected $primaryKey= 'idcita';
 public $timestamps =false;

    public $table = 'cita';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idpaciente',
        'fecha_cita',
        'iddoctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita' => 'integer',
        'idpaciente' => 'integer',
        'fecha_cita' => 'datetime',
        'iddoctor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idpaciente' => 'nullable|integer',
        'fecha_cita' => 'nullable',
        'iddoctor' => 'nullable|integer'
    ];

    
}
