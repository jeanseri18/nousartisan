<?php namespace Tests\Repositories;

use App\Models\ServiceOfBenefitCategory;
use App\Repositories\ServiceOfBenefitCategoryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ServiceOfBenefitCategoryRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ServiceOfBenefitCategoryRepository
     */
    protected $serviceOfBenefitCategoryRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->serviceOfBenefitCategoryRepo = \App::make(ServiceOfBenefitCategoryRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_service_of_benefit_category()
    {
        $serviceOfBenefitCategory = ServiceOfBenefitCategory::factory()->make()->toArray();

        $createdServiceOfBenefitCategory = $this->serviceOfBenefitCategoryRepo->create($serviceOfBenefitCategory);

        $createdServiceOfBenefitCategory = $createdServiceOfBenefitCategory->toArray();
        $this->assertArrayHasKey('id', $createdServiceOfBenefitCategory);
        $this->assertNotNull($createdServiceOfBenefitCategory['id'], 'Created ServiceOfBenefitCategory must have id specified');
        $this->assertNotNull(ServiceOfBenefitCategory::find($createdServiceOfBenefitCategory['id']), 'ServiceOfBenefitCategory with given id must be in DB');
        $this->assertModelData($serviceOfBenefitCategory, $createdServiceOfBenefitCategory);
    }

    /**
     * @test read
     */
    public function test_read_service_of_benefit_category()
    {
        $serviceOfBenefitCategory = ServiceOfBenefitCategory::factory()->create();

        $dbServiceOfBenefitCategory = $this->serviceOfBenefitCategoryRepo->find($serviceOfBenefitCategory->id);

        $dbServiceOfBenefitCategory = $dbServiceOfBenefitCategory->toArray();
        $this->assertModelData($serviceOfBenefitCategory->toArray(), $dbServiceOfBenefitCategory);
    }

    /**
     * @test update
     */
    public function test_update_service_of_benefit_category()
    {
        $serviceOfBenefitCategory = ServiceOfBenefitCategory::factory()->create();
        $fakeServiceOfBenefitCategory = ServiceOfBenefitCategory::factory()->make()->toArray();

        $updatedServiceOfBenefitCategory = $this->serviceOfBenefitCategoryRepo->update($fakeServiceOfBenefitCategory, $serviceOfBenefitCategory->id);

        $this->assertModelData($fakeServiceOfBenefitCategory, $updatedServiceOfBenefitCategory->toArray());
        $dbServiceOfBenefitCategory = $this->serviceOfBenefitCategoryRepo->find($serviceOfBenefitCategory->id);
        $this->assertModelData($fakeServiceOfBenefitCategory, $dbServiceOfBenefitCategory->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_service_of_benefit_category()
    {
        $serviceOfBenefitCategory = ServiceOfBenefitCategory::factory()->create();

        $resp = $this->serviceOfBenefitCategoryRepo->delete($serviceOfBenefitCategory->id);

        $this->assertTrue($resp);
        $this->assertNull(ServiceOfBenefitCategory::find($serviceOfBenefitCategory->id), 'ServiceOfBenefitCategory should not exist in DB');
    }
}
