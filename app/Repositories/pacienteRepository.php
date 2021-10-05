<?php

namespace App\Repositories;

use App\Models\paciente;
use App\Repositories\BaseRepository;

/**
 * Class pacienteRepository
 * @package App\Repositories
 * @version October 5, 2021, 10:09 pm UTC
*/

class pacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'apell_nomb',
        'dni',
        'celular'
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
        return paciente::class;
    }
}
