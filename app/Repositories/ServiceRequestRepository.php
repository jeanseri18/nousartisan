<?php

namespace App\Repositories;

use App\Models\ServiceRequest;
use App\Repositories\BaseRepository;

/**
 * Class ServiceRequestRepository
 * @package App\Repositories
 * @version June 20, 2022, 6:58 pm UTC
*/

class ServiceRequestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'worker_id',
        'benefit_category_id',
        'service_of_benefit_category_id',
        'adress',
        'adress_sup',
        'code_postal',
        'city',
        'town',
        'date',
        'task_description',
        'price_by_hour',
        'status_id',
        'fix_price',
        'price_after_nego'
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
        return ServiceRequest::class;
    }
}
