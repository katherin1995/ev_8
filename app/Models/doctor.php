<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class doctor
 * @package App\Models
 * @version October 5, 2021, 10:07 pm UTC
 *
 * @property string $ape_nombr
 * @property integer $dni
 * @property string $especialidad
 */
class doctor extends Model
{
    //use SoftDeletes;
    protected $primaryKey= 'iddoctor';
    public $timestamps =false;
   

    public $table = 'doctor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nombr',
        'dni',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddoctor' => 'integer',
        'ape_nombr' => 'string',
        'dni' => 'integer',
        'especialidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nombr' => 'nullable|string|max:45',
        'dni' => 'nullable|integer',
        'especialidad' => 'nullable|string|max:45'
    ];

    
}
