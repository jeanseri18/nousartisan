<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateServiceProposalAPIRequest;
use App\Http\Requests\API\UpdateServiceProposalAPIRequest;
use App\Models\ServiceProposal;
use App\Repositories\ServiceProposalRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ServiceProposalController
 * @package App\Http\Controllers\API
 */

class ServiceProposalAPIController extends AppBaseController
{
    /** @var  ServiceProposalRepository */
    private $serviceProposalRepository;

    public function __construct(ServiceProposalRepository $serviceProposalRepo)
    {
        $this->serviceProposalRepository = $serviceProposalRepo;
    }

    /**
     * Display a listing of the ServiceProposal.
     * GET|HEAD /serviceProposals
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $serviceProposals = $this->serviceProposalRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($serviceProposals->toArray(), 'Service Proposals retrieved successfully');
    }

    /**
     * Store a newly created ServiceProposal in storage.
     * POST /serviceProposals
     *
     * @param CreateServiceProposalAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceProposalAPIRequest $request)
    {
        $input = $request->all();

        $serviceProposal = $this->serviceProposalRepository->create($input);

        return $this->sendResponse($serviceProposal->toArray(), 'Service Proposal saved successfully');
    }

    /**
     * Display the specified ServiceProposal.
     * GET|HEAD /serviceProposals/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ServiceProposal $serviceProposal */
        $serviceProposal = $this->serviceProposalRepository->find($id);

        if (empty($serviceProposal)) {
            return $this->sendError('Service Proposal not found');
        }

        return $this->sendResponse($serviceProposal->toArray(), 'Service Proposal retrieved successfully');
    }

    /**
     * Update the specified ServiceProposal in storage.
     * PUT/PATCH /serviceProposals/{id}
     *
     * @param int $id
     * @param UpdateServiceProposalAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceProposalAPIRequest $request)
    {
        $input = $request->all();

        /** @var ServiceProposal $serviceProposal */
        $serviceProposal = $this->serviceProposalRepository->find($id);

        if (empty($serviceProposal)) {
            return $this->sendError('Service Proposal not found');
        }

        $serviceProposal = $this->serviceProposalRepository->update($input, $id);

        return $this->sendResponse($serviceProposal->toArray(), 'ServiceProposal updated successfully');
    }

    /**
     * Remove the specified ServiceProposal from storage.
     * DELETE /serviceProposals/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ServiceProposal $serviceProposal */
        $serviceProposal = $this->serviceProposalRepository->find($id);

        if (empty($serviceProposal)) {
            return $this->sendError('Service Proposal not found');
        }

        $serviceProposal->delete();

        return $this->sendSuccess('Service Proposal deleted successfully');
    }
}
