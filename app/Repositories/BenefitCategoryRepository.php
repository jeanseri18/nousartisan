<?php

namespace App\Repositories;

use App\Models\BenefitCategory;
use App\Repositories\BaseRepository;

/**
 * Class BenefitCategoryRepository
 * @package App\Repositories
 * @version June 20, 2022, 6:29 pm UTC
*/

class BenefitCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'image'
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
        return BenefitCategory::class;
    }
}
