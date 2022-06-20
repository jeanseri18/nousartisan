<?php namespace Tests\Repositories;

use App\Models\BenefitCategory;
use App\Repositories\BenefitCategoryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class BenefitCategoryRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var BenefitCategoryRepository
     */
    protected $benefitCategoryRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->benefitCategoryRepo = \App::make(BenefitCategoryRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_benefit_category()
    {
        $benefitCategory = BenefitCategory::factory()->make()->toArray();

        $createdBenefitCategory = $this->benefitCategoryRepo->create($benefitCategory);

        $createdBenefitCategory = $createdBenefitCategory->toArray();
        $this->assertArrayHasKey('id', $createdBenefitCategory);
        $this->assertNotNull($createdBenefitCategory['id'], 'Created BenefitCategory must have id specified');
        $this->assertNotNull(BenefitCategory::find($createdBenefitCategory['id']), 'BenefitCategory with given id must be in DB');
        $this->assertModelData($benefitCategory, $createdBenefitCategory);
    }

    /**
     * @test read
     */
    public function test_read_benefit_category()
    {
        $benefitCategory = BenefitCategory::factory()->create();

        $dbBenefitCategory = $this->benefitCategoryRepo->find($benefitCategory->id);

        $dbBenefitCategory = $dbBenefitCategory->toArray();
        $this->assertModelData($benefitCategory->toArray(), $dbBenefitCategory);
    }

    /**
     * @test update
     */
    public function test_update_benefit_category()
    {
        $benefitCategory = BenefitCategory::factory()->create();
        $fakeBenefitCategory = BenefitCategory::factory()->make()->toArray();

        $updatedBenefitCategory = $this->benefitCategoryRepo->update($fakeBenefitCategory, $benefitCategory->id);

        $this->assertModelData($fakeBenefitCategory, $updatedBenefitCategory->toArray());
        $dbBenefitCategory = $this->benefitCategoryRepo->find($benefitCategory->id);
        $this->assertModelData($fakeBenefitCategory, $dbBenefitCategory->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_benefit_category()
    {
        $benefitCategory = BenefitCategory::factory()->create();

        $resp = $this->benefitCategoryRepo->delete($benefitCategory->id);

        $this->assertTrue($resp);
        $this->assertNull(BenefitCategory::find($benefitCategory->id), 'BenefitCategory should not exist in DB');
    }
}
