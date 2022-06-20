<?php

namespace App\Repositories;

use App\Models\ServiceProposal;
use App\Repositories\BaseRepository;

/**
 * Class ServiceProposalRepository
 * @package App\Repositories
 * @version June 20, 2022, 7:18 pm UTC
*/

class ServiceProposalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'service_request_id',
        'price_of_proposal',
        'status_id',
        'quotation'
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
        return ServiceProposal::class;
    }
}
