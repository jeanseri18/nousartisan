<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBenefitCategoryAPIRequest;
use App\Http\Requests\API\UpdateBenefitCategoryAPIRequest;
use App\Models\BenefitCategory;
use App\Repositories\BenefitCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class BenefitCategoryController
 * @package App\Http\Controllers\API
 */

class BenefitCategoryAPIController extends AppBaseController
{
    /** @var  BenefitCategoryRepository */
    private $benefitCategoryRepository;

    public function __construct(BenefitCategoryRepository $benefitCategoryRepo)
    {
        $this->benefitCategoryRepository = $benefitCategoryRepo;
    }

    /**
     * Display a listing of the BenefitCategory.
     * GET|HEAD /benefitCategories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $benefitCategories = $this->benefitCategoryRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($benefitCategories->toArray(), 'Benefit Categories retrieved successfully');
    }

    /**
     * Store a newly created BenefitCategory in storage.
     * POST /benefitCategories
     *
     * @param CreateBenefitCategoryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateBenefitCategoryAPIRequest $request)
    {
        $input = $request->all();

        $benefitCategory = $this->benefitCategoryRepository->create($input);

        return $this->sendResponse($benefitCategory->toArray(), 'Benefit Category saved successfully');
    }

    /**
     * Display the specified BenefitCategory.
     * GET|HEAD /benefitCategories/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var BenefitCategory $benefitCategory */
        $benefitCategory = $this->benefitCategoryRepository->find($id);

        if (empty($benefitCategory)) {
            return $this->sendError('Benefit Category not found');
        }

        return $this->sendResponse($benefitCategory->toArray(), 'Benefit Category retrieved successfully');
    }

    /**
     * Update the specified BenefitCategory in storage.
     * PUT/PATCH /benefitCategories/{id}
     *
     * @param int $id
     * @param UpdateBenefitCategoryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBenefitCategoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var BenefitCategory $benefitCategory */
        $benefitCategory = $this->benefitCategoryRepository->find($id);

        if (empty($benefitCategory)) {
            return $this->sendError('Benefit Category not found');
        }

        $benefitCategory = $this->benefitCategoryRepository->update($input, $id);

        return $this->sendResponse($benefitCategory->toArray(), 'BenefitCategory updated successfully');
    }

    /**
     * Remove the specified BenefitCategory from storage.
     * DELETE /benefitCategories/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var BenefitCategory $benefitCategory */
        $benefitCategory = $this->benefitCategoryRepository->find($id);

        if (empty($benefitCategory)) {
            return $this->sendError('Benefit Category not found');
        }

        $benefitCategory->delete();

        return $this->sendSuccess('Benefit Category deleted successfully');
    }
}
