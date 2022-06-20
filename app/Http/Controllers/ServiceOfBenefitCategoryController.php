<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceOfBenefitCategoryRequest;
use App\Http\Requests\UpdateServiceOfBenefitCategoryRequest;
use App\Repositories\ServiceOfBenefitCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ServiceOfBenefitCategoryController extends AppBaseController
{
    /** @var ServiceOfBenefitCategoryRepository $serviceOfBenefitCategoryRepository*/
    private $serviceOfBenefitCategoryRepository;

    public function __construct(ServiceOfBenefitCategoryRepository $serviceOfBenefitCategoryRepo)
    {
        $this->serviceOfBenefitCategoryRepository = $serviceOfBenefitCategoryRepo;
    }

    /**
     * Display a listing of the ServiceOfBenefitCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $serviceOfBenefitCategories = $this->serviceOfBenefitCategoryRepository->all();

        return view('service_of_benefit_categories.index')
            ->with('serviceOfBenefitCategories', $serviceOfBenefitCategories);
    }

    /**
     * Show the form for creating a new ServiceOfBenefitCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('service_of_benefit_categories.create');
    }

    /**
     * Store a newly created ServiceOfBenefitCategory in storage.
     *
     * @param CreateServiceOfBenefitCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceOfBenefitCategoryRequest $request)
    {
        $input = $request->all();

        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->create($input);

        Flash::success('Service Of Benefit Category saved successfully.');

        return redirect(route('serviceOfBenefitCategories.index'));
    }

    /**
     * Display the specified ServiceOfBenefitCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->find($id);

        if (empty($serviceOfBenefitCategory)) {
            Flash::error('Service Of Benefit Category not found');

            return redirect(route('serviceOfBenefitCategories.index'));
        }

        return view('service_of_benefit_categories.show')->with('serviceOfBenefitCategory', $serviceOfBenefitCategory);
    }

    /**
     * Show the form for editing the specified ServiceOfBenefitCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->find($id);

        if (empty($serviceOfBenefitCategory)) {
            Flash::error('Service Of Benefit Category not found');

            return redirect(route('serviceOfBenefitCategories.index'));
        }

        return view('service_of_benefit_categories.edit')->with('serviceOfBenefitCategory', $serviceOfBenefitCategory);
    }

    /**
     * Update the specified ServiceOfBenefitCategory in storage.
     *
     * @param int $id
     * @param UpdateServiceOfBenefitCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceOfBenefitCategoryRequest $request)
    {
        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->find($id);

        if (empty($serviceOfBenefitCategory)) {
            Flash::error('Service Of Benefit Category not found');

            return redirect(route('serviceOfBenefitCategories.index'));
        }

        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->update($request->all(), $id);

        Flash::success('Service Of Benefit Category updated successfully.');

        return redirect(route('serviceOfBenefitCategories.index'));
    }

    /**
     * Remove the specified ServiceOfBenefitCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->find($id);

        if (empty($serviceOfBenefitCategory)) {
            Flash::error('Service Of Benefit Category not found');

            return redirect(route('serviceOfBenefitCategories.index'));
        }

        $this->serviceOfBenefitCategoryRepository->delete($id);

        Flash::success('Service Of Benefit Category deleted successfully.');

        return redirect(route('serviceOfBenefitCategories.index'));
    }
}
