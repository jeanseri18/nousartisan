<?php namespace Tests\Repositories;

use App\Models\ServiceRequest;
use App\Repositories\ServiceRequestRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ServiceRequestRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ServiceRequestRepository
     */
    protected $serviceRequestRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->serviceRequestRepo = \App::make(ServiceRequestRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_service_request()
    {
        $serviceRequest = ServiceRequest::factory()->make()->toArray();

        $createdServiceRequest = $this->serviceRequestRepo->create($serviceRequest);

        $createdServiceRequest = $createdServiceRequest->toArray();
        $this->assertArrayHasKey('id', $createdServiceRequest);
        $this->assertNotNull($createdServiceRequest['id'], 'Created ServiceRequest must have id specified');
        $this->assertNotNull(ServiceRequest::find($createdServiceRequest['id']), 'ServiceRequest with given id must be in DB');
        $this->assertModelData($serviceRequest, $createdServiceRequest);
    }

    /**
     * @test read
     */
    public function test_read_service_request()
    {
        $serviceRequest = ServiceRequest::factory()->create();

        $dbServiceRequest = $this->serviceRequestRepo->find($serviceRequest->id);

        $dbServiceRequest = $dbServiceRequest->toArray();
        $this->assertModelData($serviceRequest->toArray(), $dbServiceRequest);
    }

    /**
     * @test update
     */
    public function test_update_service_request()
    {
        $serviceRequest = ServiceRequest::factory()->create();
        $fakeServiceRequest = ServiceRequest::factory()->make()->toArray();

        $updatedServiceRequest = $this->serviceRequestRepo->update($fakeServiceRequest, $serviceRequest->id);

        $this->assertModelData($fakeServiceRequest, $updatedServiceRequest->toArray());
        $dbServiceRequest = $this->serviceRequestRepo->find($serviceRequest->id);
        $this->assertModelData($fakeServiceRequest, $dbServiceRequest->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_service_request()
    {
        $serviceRequest = ServiceRequest::factory()->create();

        $resp = $this->serviceRequestRepo->delete($serviceRequest->id);

        $this->assertTrue($resp);
        $this->assertNull(ServiceRequest::find($serviceRequest->id), 'ServiceRequest should not exist in DB');
    }
}
