<?php

namespace App\Repositories;

use App\Models\ServiceOfBenefitCategory;
use App\Repositories\BaseRepository;

/**
 * Class ServiceOfBenefitCategoryRepository
 * @package App\Repositories
 * @version June 20, 2022, 6:47 pm UTC
*/

class ServiceOfBenefitCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'benefit_category_id',
        'name',
        'display_price',
        'real_price',
        'price',
        'description',
        'image',
        'publisher_id'
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
        return ServiceOfBenefitCategory::class;
    }
}
