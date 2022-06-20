<?php

namespace App\Repositories;

use App\Models\Worker;
use App\Repositories\BaseRepository;

/**
 * Class WorkerRepository
 * @package App\Repositories
 * @version June 20, 2022, 6:04 pm UTC
*/

class WorkerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number_siren',
        'name',
        'number_tva',
        'owner_number',
        'owner_name',
        'email',
        'tel',
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
        return Worker::class;
    }
}
