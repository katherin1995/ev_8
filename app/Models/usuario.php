<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class usuario
 * @package App\Models
 * @version October 5, 2021, 10:10 pm UTC
 *
 * @property string $apellido_nombre
 * @property string $usuario
 * @property string $password
 */
class usuario extends Model
{
    //use SoftDeletes;
    protected $primaryKey= 'idusuario';
    public $timestamps =false;
 

    public $table = 'usuario';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apellido_nombre',
        'usuario',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idusuario' => 'integer',
        'apellido_nombre' => 'string',
        'usuario' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apellido_nombre' => 'nullable|string|max:45',
        'usuario' => 'nullable|string|max:45',
        'password' => 'nullable|string|max:45'
    ];

    
}
