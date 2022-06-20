<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\ServiceRequest;

class ServiceRequestApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_service_request()
    {
        $serviceRequest = ServiceRequest::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/service_requests', $serviceRequest
        );

        $this->assertApiResponse($serviceRequest);
    }

    /**
     * @test
     */
    public function test_read_service_request()
    {
        $serviceRequest = ServiceRequest::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/service_requests/'.$serviceRequest->id
        );

        $this->assertApiResponse($serviceRequest->toArray());
    }

    /**
     * @test
     */
    public function test_update_service_request()
    {
        $serviceRequest = ServiceRequest::factory()->create();
        $editedServiceRequest = ServiceRequest::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/service_requests/'.$serviceRequest->id,
            $editedServiceRequest
        );

        $this->assertApiResponse($editedServiceRequest);
    }

    /**
     * @test
     */
    public function test_delete_service_request()
    {
        $serviceRequest = ServiceRequest::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/service_requests/'.$serviceRequest->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/service_requests/'.$serviceRequest->id
        );

        $this->response->assertStatus(404);
    }
}
