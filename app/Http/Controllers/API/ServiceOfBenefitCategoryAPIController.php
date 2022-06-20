<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateServiceOfBenefitCategoryAPIRequest;
use App\Http\Requests\API\UpdateServiceOfBenefitCategoryAPIRequest;
use App\Models\ServiceOfBenefitCategory;
use App\Repositories\ServiceOfBenefitCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ServiceOfBenefitCategoryController
 * @package App\Http\Controllers\API
 */

class ServiceOfBenefitCategoryAPIController extends AppBaseController
{
    /** @var  ServiceOfBenefitCategoryRepository */
    private $serviceOfBenefitCategoryRepository;

    public function __construct(ServiceOfBenefitCategoryRepository $serviceOfBenefitCategoryRepo)
    {
        $this->serviceOfBenefitCategoryRepository = $serviceOfBenefitCategoryRepo;
    }

    /**
     * Display a listing of the ServiceOfBenefitCategory.
     * GET|HEAD /serviceOfBenefitCategories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $serviceOfBenefitCategories = $this->serviceOfBenefitCategoryRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($serviceOfBenefitCategories->toArray(), 'Service Of Benefit Categories retrieved successfully');
    }

    /**
     * Store a newly created ServiceOfBenefitCategory in storage.
     * POST /serviceOfBenefitCategories
     *
     * @param CreateServiceOfBenefitCategoryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceOfBenefitCategoryAPIRequest $request)
    {
        $input = $request->all();

        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->create($input);

        return $this->sendResponse($serviceOfBenefitCategory->toArray(), 'Service Of Benefit Category saved successfully');
    }

    /**
     * Display the specified ServiceOfBenefitCategory.
     * GET|HEAD /serviceOfBenefitCategories/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ServiceOfBenefitCategory $serviceOfBenefitCategory */
        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->find($id);

        if (empty($serviceOfBenefitCategory)) {
            return $this->sendError('Service Of Benefit Category not found');
        }

        return $this->sendResponse($serviceOfBenefitCategory->toArray(), 'Service Of Benefit Category retrieved successfully');
    }

    /**
     * Update the specified ServiceOfBenefitCategory in storage.
     * PUT/PATCH /serviceOfBenefitCategories/{id}
     *
     * @param int $id
     * @param UpdateServiceOfBenefitCategoryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceOfBenefitCategoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var ServiceOfBenefitCategory $serviceOfBenefitCategory */
        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->find($id);

        if (empty($serviceOfBenefitCategory)) {
            return $this->sendError('Service Of Benefit Category not found');
        }

        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->update($input, $id);

        return $this->sendResponse($serviceOfBenefitCategory->toArray(), 'ServiceOfBenefitCategory updated successfully');
    }

    /**
     * Remove the specified ServiceOfBenefitCategory from storage.
     * DELETE /serviceOfBenefitCategories/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ServiceOfBenefitCategory $serviceOfBenefitCategory */
        $serviceOfBenefitCategory = $this->serviceOfBenefitCategoryRepository->find($id);

        if (empty($serviceOfBenefitCategory)) {
            return $this->sendError('Service Of Benefit Category not found');
        }

        $serviceOfBenefitCategory->delete();

        return $this->sendSuccess('Service Of Benefit Category deleted successfully');
    }
}
