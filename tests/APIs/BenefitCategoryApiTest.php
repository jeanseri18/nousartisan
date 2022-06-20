<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\BenefitCategory;

class BenefitCategoryApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_benefit_category()
    {
        $benefitCategory = BenefitCategory::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/benefit_categories', $benefitCategory
        );

        $this->assertApiResponse($benefitCategory);
    }

    /**
     * @test
     */
    public function test_read_benefit_category()
    {
        $benefitCategory = BenefitCategory::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/benefit_categories/'.$benefitCategory->id
        );

        $this->assertApiResponse($benefitCategory->toArray());
    }

    /**
     * @test
     */
    public function test_update_benefit_category()
    {
        $benefitCategory = BenefitCategory::factory()->create();
        $editedBenefitCategory = BenefitCategory::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/benefit_categories/'.$benefitCategory->id,
            $editedBenefitCategory
        );

        $this->assertApiResponse($editedBenefitCategory);
    }

    /**
     * @test
     */
    public function test_delete_benefit_category()
    {
        $benefitCategory = BenefitCategory::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/benefit_categories/'.$benefitCategory->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/benefit_categories/'.$benefitCategory->id
        );

        $this->response->assertStatus(404);
    }
}
