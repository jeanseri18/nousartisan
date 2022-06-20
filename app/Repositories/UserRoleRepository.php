<?php

namespace App\Repositories;

use App\Models\UserRole;
use App\Repositories\BaseRepository;

/**
 * Class UserRoleRepository
 * @package App\Repositories
 * @version June 20, 2022, 7:22 pm UTC
*/

class UserRoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return UserRole::class;
    }
}
