<?php namespace Tests\Repositories;

use App\Models\ServiceProposal;
use App\Repositories\ServiceProposalRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ServiceProposalRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ServiceProposalRepository
     */
    protected $serviceProposalRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->serviceProposalRepo = \App::make(ServiceProposalRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_service_proposal()
    {
        $serviceProposal = ServiceProposal::factory()->make()->toArray();

        $createdServiceProposal = $this->serviceProposalRepo->create($serviceProposal);

        $createdServiceProposal = $createdServiceProposal->toArray();
        $this->assertArrayHasKey('id', $createdServiceProposal);
        $this->assertNotNull($createdServiceProposal['id'], 'Created ServiceProposal must have id specified');
        $this->assertNotNull(ServiceProposal::find($createdServiceProposal['id']), 'ServiceProposal with given id must be in DB');
        $this->assertModelData($serviceProposal, $createdServiceProposal);
    }

    /**
     * @test read
     */
    public function test_read_service_proposal()
    {
        $serviceProposal = ServiceProposal::factory()->create();

        $dbServiceProposal = $this->serviceProposalRepo->find($serviceProposal->id);

        $dbServiceProposal = $dbServiceProposal->toArray();
        $this->assertModelData($serviceProposal->toArray(), $dbServiceProposal);
    }

    /**
     * @test update
     */
    public function test_update_service_proposal()
    {
        $serviceProposal = ServiceProposal::factory()->create();
        $fakeServiceProposal = ServiceProposal::factory()->make()->toArray();

        $updatedServiceProposal = $this->serviceProposalRepo->update($fakeServiceProposal, $serviceProposal->id);

        $this->assertModelData($fakeServiceProposal, $updatedServiceProposal->toArray());
        $dbServiceProposal = $this->serviceProposalRepo->find($serviceProposal->id);
        $this->assertModelData($fakeServiceProposal, $dbServiceProposal->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_service_proposal()
    {
        $serviceProposal = ServiceProposal::factory()->create();

        $resp = $this->serviceProposalRepo->delete($serviceProposal->id);

        $this->assertTrue($resp);
        $this->assertNull(ServiceProposal::find($serviceProposal->id), 'ServiceProposal should not exist in DB');
    }
}
