<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class paciente
 * @package App\Models
 * @version October 5, 2021, 10:09 pm UTC
 *
 * @property string $apell_nomb
 * @property integer $dni
 * @property integer $celular
 */
class paciente extends Model
{
   // use SoftDeletes;
   protected $primaryKey= 'idpaciente';
   public $timestamps =false;

    public $table = 'paciente';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apell_nomb',
        'dni',
        'celular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpaciente' => 'integer',
        'apell_nomb' => 'string',
        'dni' => 'integer',
        'celular' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apell_nomb' => 'nullable|string|max:45',
        'dni' => 'nullable|integer',
        'celular' => 'nullable|integer'
    ];

    
}
