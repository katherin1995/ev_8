<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita_detalle
 * @package App\Models
 * @version October 5, 2021, 10:05 pm UTC
 *
 * @property integer $idcita
 */
class Cita_detalle extends Model
{
    //use SoftDeletes;
    protected $primaryKey= 'iddetalle_cita';
    public $timestamps =false;
    public $table = 'cita_detalle';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddetalle_cita' => 'integer',
        'idcita' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcita' => 'nullable|integer'
    ];

    
}
