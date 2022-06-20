<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWorkerAPIRequest;
use App\Http\Requests\API\UpdateWorkerAPIRequest;
use App\Models\Worker;
use App\Repositories\WorkerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class WorkerController
 * @package App\Http\Controllers\API
 */

class WorkerAPIController extends AppBaseController
{
    /** @var  WorkerRepository */
    private $workerRepository;

    public function __construct(WorkerRepository $workerRepo)
    {
        $this->workerRepository = $workerRepo;
    }

    /**
     * Display a listing of the Worker.
     * GET|HEAD /workers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $workers = $this->workerRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($workers->toArray(), 'Workers retrieved successfully');
    }

    /**
     * Store a newly created Worker in storage.
     * POST /workers
     *
     * @param CreateWorkerAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkerAPIRequest $request)
    {
        $input = $request->all();

        $worker = $this->workerRepository->create($input);

        return $this->sendResponse($worker->toArray(), 'Worker saved successfully');
    }

    /**
     * Display the specified Worker.
     * GET|HEAD /workers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Worker $worker */
        $worker = $this->workerRepository->find($id);

        if (empty($worker)) {
            return $this->sendError('Worker not found');
        }

        return $this->sendResponse($worker->toArray(), 'Worker retrieved successfully');
    }

    /**
     * Update the specified Worker in storage.
     * PUT/PATCH /workers/{id}
     *
     * @param int $id
     * @param UpdateWorkerAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkerAPIRequest $request)
    {
        $input = $request->all();

        /** @var Worker $worker */
        $worker = $this->workerRepository->find($id);

        if (empty($worker)) {
            return $this->sendError('Worker not found');
        }

        $worker = $this->workerRepository->update($input, $id);

        return $this->sendResponse($worker->toArray(), 'Worker updated successfully');
    }

    /**
     * Remove the specified Worker from storage.
     * DELETE /workers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Worker $worker */
        $worker = $this->workerRepository->find($id);

        if (empty($worker)) {
            return $this->sendError('Worker not found');
        }

        $worker->delete();

        return $this->sendSuccess('Worker deleted successfully');
    }
}
