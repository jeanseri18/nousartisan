<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceRequestRequest;
use App\Http\Requests\UpdateServiceRequestRequest;
use App\Repositories\ServiceRequestRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ServiceRequestController extends AppBaseController
{
    /** @var ServiceRequestRepository $serviceRequestRepository*/
    private $serviceRequestRepository;

    public function __construct(ServiceRequestRepository $serviceRequestRepo)
    {
        $this->serviceRequestRepository = $serviceRequestRepo;
    }

    /**
     * Display a listing of the ServiceRequest.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $serviceRequests = $this->serviceRequestRepository->all();

        return view('service_requests.index')
            ->with('serviceRequests', $serviceRequests);
    }

    /**
     * Show the form for creating a new ServiceRequest.
     *
     * @return Response
     */
    public function create()
    {
        return view('service_requests.create');
    }

    /**
     * Store a newly created ServiceRequest in storage.
     *
     * @param CreateServiceRequestRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceRequestRequest $request)
    {
        $input = $request->all();

        $serviceRequest = $this->serviceRequestRepository->create($input);

        Flash::success('Service Request saved successfully.');

        return redirect(route('serviceRequests.index'));
    }

    /**
     * Display the specified ServiceRequest.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceRequest = $this->serviceRequestRepository->find($id);

        if (empty($serviceRequest)) {
            Flash::error('Service Request not found');

            return redirect(route('serviceRequests.index'));
        }

        return view('service_requests.show')->with('serviceRequest', $serviceRequest);
    }

    /**
     * Show the form for editing the specified ServiceRequest.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceRequest = $this->serviceRequestRepository->find($id);

        if (empty($serviceRequest)) {
            Flash::error('Service Request not found');

            return redirect(route('serviceRequests.index'));
        }

        return view('service_requests.edit')->with('serviceRequest', $serviceRequest);
    }

    /**
     * Update the specified ServiceRequest in storage.
     *
     * @param int $id
     * @param UpdateServiceRequestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceRequestRequest $request)
    {
        $serviceRequest = $this->serviceRequestRepository->find($id);

        if (empty($serviceRequest)) {
            Flash::error('Service Request not found');

            return redirect(route('serviceRequests.index'));
        }

        $serviceRequest = $this->serviceRequestRepository->update($request->all(), $id);

        Flash::success('Service Request updated successfully.');

        return redirect(route('serviceRequests.index'));
    }

    /**
     * Remove the specified ServiceRequest from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceRequest = $this->serviceRequestRepository->find($id);

        if (empty($serviceRequest)) {
            Flash::error('Service Request not found');

            return redirect(route('serviceRequests.index'));
        }

        $this->serviceRequestRepository->delete($id);

        Flash::success('Service Request deleted successfully.');

        return redirect(route('serviceRequests.index'));
    }
}
