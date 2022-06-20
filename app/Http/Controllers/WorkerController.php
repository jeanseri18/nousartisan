<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use App\Repositories\WorkerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class WorkerController extends AppBaseController
{
    /** @var WorkerRepository $workerRepository*/
    private $workerRepository;

    public function __construct(WorkerRepository $workerRepo)
    {
        $this->workerRepository = $workerRepo;
    }

    /**
     * Display a listing of the Worker.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $workers = $this->workerRepository->all();

        return view('workers.index')
            ->with('workers', $workers);
    }

    /**
     * Show the form for creating a new Worker.
     *
     * @return Response
     */
    public function create()
    {
        return view('workers.create');
    }

    /**
     * Store a newly created Worker in storage.
     *
     * @param CreateWorkerRequest $request
     *
     * @return Response
     */
    public function store(CreateWorkerRequest $request)
    {
        $input = $request->all();

        $worker = $this->workerRepository->create($input);

        Flash::success('Worker saved successfully.');

        return redirect(route('workers.index'));
    }

    /**
     * Display the specified Worker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $worker = $this->workerRepository->find($id);

        if (empty($worker)) {
            Flash::error('Worker not found');

            return redirect(route('workers.index'));
        }

        return view('workers.show')->with('worker', $worker);
    }

    /**
     * Show the form for editing the specified Worker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $worker = $this->workerRepository->find($id);

        if (empty($worker)) {
            Flash::error('Worker not found');

            return redirect(route('workers.index'));
        }

        return view('workers.edit')->with('worker', $worker);
    }

    /**
     * Update the specified Worker in storage.
     *
     * @param int $id
     * @param UpdateWorkerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorkerRequest $request)
    {
        $worker = $this->workerRepository->find($id);

        if (empty($worker)) {
            Flash::error('Worker not found');

            return redirect(route('workers.index'));
        }

        $worker = $this->workerRepository->update($request->all(), $id);

        Flash::success('Worker updated successfully.');

        return redirect(route('workers.index'));
    }

    /**
     * Remove the specified Worker from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $worker = $this->workerRepository->find($id);

        if (empty($worker)) {
            Flash::error('Worker not found');

            return redirect(route('workers.index'));
        }

        $this->workerRepository->delete($id);

        Flash::success('Worker deleted successfully.');

        return redirect(route('workers.index'));
    }
}
