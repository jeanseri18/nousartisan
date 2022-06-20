<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceProposalRequest;
use App\Http\Requests\UpdateServiceProposalRequest;
use App\Repositories\ServiceProposalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ServiceProposalController extends AppBaseController
{
    /** @var ServiceProposalRepository $serviceProposalRepository*/
    private $serviceProposalRepository;

    public function __construct(ServiceProposalRepository $serviceProposalRepo)
    {
        $this->serviceProposalRepository = $serviceProposalRepo;
    }

    /**
     * Display a listing of the ServiceProposal.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $serviceProposals = $this->serviceProposalRepository->all();

        return view('service_proposals.index')
            ->with('serviceProposals', $serviceProposals);
    }

    /**
     * Show the form for creating a new ServiceProposal.
     *
     * @return Response
     */
    public function create()
    {
        return view('service_proposals.create');
    }

    /**
     * Store a newly created ServiceProposal in storage.
     *
     * @param CreateServiceProposalRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceProposalRequest $request)
    {
        $input = $request->all();

        $serviceProposal = $this->serviceProposalRepository->create($input);

        Flash::success('Service Proposal saved successfully.');

        return redirect(route('serviceProposals.index'));
    }

    /**
     * Display the specified ServiceProposal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceProposal = $this->serviceProposalRepository->find($id);

        if (empty($serviceProposal)) {
            Flash::error('Service Proposal not found');

            return redirect(route('serviceProposals.index'));
        }

        return view('service_proposals.show')->with('serviceProposal', $serviceProposal);
    }

    /**
     * Show the form for editing the specified ServiceProposal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceProposal = $this->serviceProposalRepository->find($id);

        if (empty($serviceProposal)) {
            Flash::error('Service Proposal not found');

            return redirect(route('serviceProposals.index'));
        }

        return view('service_proposals.edit')->with('serviceProposal', $serviceProposal);
    }

    /**
     * Update the specified ServiceProposal in storage.
     *
     * @param int $id
     * @param UpdateServiceProposalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceProposalRequest $request)
    {
        $serviceProposal = $this->serviceProposalRepository->find($id);

        if (empty($serviceProposal)) {
            Flash::error('Service Proposal not found');

            return redirect(route('serviceProposals.index'));
        }

        $serviceProposal = $this->serviceProposalRepository->update($request->all(), $id);

        Flash::success('Service Proposal updated successfully.');

        return redirect(route('serviceProposals.index'));
    }

    /**
     * Remove the specified ServiceProposal from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceProposal = $this->serviceProposalRepository->find($id);

        if (empty($serviceProposal)) {
            Flash::error('Service Proposal not found');

            return redirect(route('serviceProposals.index'));
        }

        $this->serviceProposalRepository->delete($id);

        Flash::success('Service Proposal deleted successfully.');

        return redirect(route('serviceProposals.index'));
    }
}
