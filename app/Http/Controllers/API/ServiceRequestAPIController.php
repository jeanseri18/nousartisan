<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateServiceRequestAPIRequest;
use App\Http\Requests\API\UpdateServiceRequestAPIRequest;
use App\Models\ServiceRequest;
use App\Repositories\ServiceRequestRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ServiceRequestController
 * @package App\Http\Controllers\API
 */

class ServiceRequestAPIController extends AppBaseController
{
    /** @var  ServiceRequestRepository */
    private $serviceRequestRepository;

    public function __construct(ServiceRequestRepository $serviceRequestRepo)
    {
        $this->serviceRequestRepository = $serviceRequestRepo;
    }

    /**
     * Display a listing of the ServiceRequest.
     * GET|HEAD /serviceRequests
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $serviceRequests = $this->serviceRequestRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($serviceRequests->toArray(), 'Service Requests retrieved successfully');
    }

    /**
     * Store a newly created ServiceRequest in storage.
     * POST /serviceRequests
     *
     * @param CreateServiceRequestAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceRequestAPIRequest $request)
    {
        $input = $request->all();

        $serviceRequest = $this->serviceRequestRepository->create($input);

        return $this->sendResponse($serviceRequest->toArray(), 'Service Request saved successfully');
    }

    /**
     * Display the specified ServiceRequest.
     * GET|HEAD /serviceRequests/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ServiceRequest $serviceRequest */
        $serviceRequest = $this->serviceRequestRepository->find($id);

        if (empty($serviceRequest)) {
            return $this->sendError('Service Request not found');
        }

        return $this->sendResponse($serviceRequest->toArray(), 'Service Request retrieved successfully');
    }

    /**
     * Update the specified ServiceRequest in storage.
     * PUT/PATCH /serviceRequests/{id}
     *
     * @param int $id
     * @param UpdateServiceRequestAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceRequestAPIRequest $request)
    {
        $input = $request->all();

        /** @var ServiceRequest $serviceRequest */
        $serviceRequest = $this->serviceRequestRepository->find($id);

        if (empty($serviceRequest)) {
            return $this->sendError('Service Request not found');
        }

        $serviceRequest = $this->serviceRequestRepository->update($input, $id);

        return $this->sendResponse($serviceRequest->toArray(), 'ServiceRequest updated successfully');
    }

    /**
     * Remove the specified ServiceRequest from storage.
     * DELETE /serviceRequests/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ServiceRequest $serviceRequest */
        $serviceRequest = $this->serviceRequestRepository->find($id);

        if (empty($serviceRequest)) {
            return $this->sendError('Service Request not found');
        }

        $serviceRequest->delete();

        return $this->sendSuccess('Service Request deleted successfully');
    }
}
