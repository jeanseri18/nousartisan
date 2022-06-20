<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\ServiceOfBenefitCategory;

class ServiceOfBenefitCategoryApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_service_of_benefit_category()
    {
        $serviceOfBenefitCategory = ServiceOfBenefitCategory::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/service_of_benefit_categories', $serviceOfBenefitCategory
        );

        $this->assertApiResponse($serviceOfBenefitCategory);
    }

    /**
     * @test
     */
    public function test_read_service_of_benefit_category()
    {
        $serviceOfBenefitCategory = ServiceOfBenefitCategory::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/service_of_benefit_categories/'.$serviceOfBenefitCategory->id
        );

        $this->assertApiResponse($serviceOfBenefitCategory->toArray());
    }

    /**
     * @test
     */
    public function test_update_service_of_benefit_category()
    {
        $serviceOfBenefitCategory = ServiceOfBenefitCategory::factory()->create();
        $editedServiceOfBenefitCategory = ServiceOfBenefitCategory::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/service_of_benefit_categories/'.$serviceOfBenefitCategory->id,
            $editedServiceOfBenefitCategory
        );

        $this->assertApiResponse($editedServiceOfBenefitCategory);
    }

    /**
     * @test
     */
    public function test_delete_service_of_benefit_category()
    {
        $serviceOfBenefitCategory = ServiceOfBenefitCategory::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/service_of_benefit_categories/'.$serviceOfBenefitCategory->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/service_of_benefit_categories/'.$serviceOfBenefitCategory->id
        );

        $this->response->assertStatus(404);
    }
}
