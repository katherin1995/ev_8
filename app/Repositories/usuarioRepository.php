<?php

namespace App\Repositories;

use App\Models\usuario;
use App\Repositories\BaseRepository;

/**
 * Class usuarioRepository
 * @package App\Repositories
 * @version October 5, 2021, 10:10 pm UTC
*/

class usuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'apellido_nombre',
        'usuario',
        'password'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return usuario::class;
    }
}
