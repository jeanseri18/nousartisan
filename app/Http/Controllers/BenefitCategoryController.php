<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBenefitCategoryRequest;
use App\Http\Requests\UpdateBenefitCategoryRequest;
use App\Repositories\BenefitCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BenefitCategoryController extends AppBaseController
{
    /** @var BenefitCategoryRepository $benefitCategoryRepository*/
    private $benefitCategoryRepository;

    public function __construct(BenefitCategoryRepository $benefitCategoryRepo)
    {
        $this->benefitCategoryRepository = $benefitCategoryRepo;
    }

    /**
     * Display a listing of the BenefitCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $benefitCategories = $this->benefitCategoryRepository->all();

        return view('benefit_categories.index')
            ->with('benefitCategories', $benefitCategories);
    }

    /**
     * Show the form for creating a new BenefitCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('benefit_categories.create');
    }

    /**
     * Store a newly created BenefitCategory in storage.
     *
     * @param CreateBenefitCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateBenefitCategoryRequest $request)
    {
        $input = $request->all();

        $benefitCategory = $this->benefitCategoryRepository->create($input);

        Flash::success('Benefit Category saved successfully.');

        return redirect(route('benefitCategories.index'));
    }

    /**
     * Display the specified BenefitCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $benefitCategory = $this->benefitCategoryRepository->find($id);

        if (empty($benefitCategory)) {
            Flash::error('Benefit Category not found');

            return redirect(route('benefitCategories.index'));
        }

        return view('benefit_categories.show')->with('benefitCategory', $benefitCategory);
    }

    /**
     * Show the form for editing the specified BenefitCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $benefitCategory = $this->benefitCategoryRepository->find($id);

        if (empty($benefitCategory)) {
            Flash::error('Benefit Category not found');

            return redirect(route('benefitCategories.index'));
        }

        return view('benefit_categories.edit')->with('benefitCategory', $benefitCategory);
    }

    /**
     * Update the specified BenefitCategory in storage.
     *
     * @param int $id
     * @param UpdateBenefitCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBenefitCategoryRequest $request)
    {
        $benefitCategory = $this->benefitCategoryRepository->find($id);

        if (empty($benefitCategory)) {
            Flash::error('Benefit Category not found');

            return redirect(route('benefitCategories.index'));
        }

        $benefitCategory = $this->benefitCategoryRepository->update($request->all(), $id);

        Flash::success('Benefit Category updated successfully.');

        return redirect(route('benefitCategories.index'));
    }

    /**
     * Remove the specified BenefitCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $benefitCategory = $this->benefitCategoryRepository->find($id);

        if (empty($benefitCategory)) {
            Flash::error('Benefit Category not found');

            return redirect(route('benefitCategories.index'));
        }

        $this->benefitCategoryRepository->delete($id);

        Flash::success('Benefit Category deleted successfully.');

        return redirect(route('benefitCategories.index'));
    }
}
