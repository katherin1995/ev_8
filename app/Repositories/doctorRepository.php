<?php

namespace App\Repositories;

use App\Models\doctor;
use App\Repositories\BaseRepository;

/**
 * Class doctorRepository
 * @package App\Repositories
 * @version October 5, 2021, 10:07 pm UTC
*/

class doctorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ape_nombr',
        'dni',
        'especialidad'
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
        return doctor::class;
    }
}
