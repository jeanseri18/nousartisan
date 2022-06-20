<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\ServiceProposal;

class ServiceProposalApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_service_proposal()
    {
        $serviceProposal = ServiceProposal::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/service_proposals', $serviceProposal
        );

        $this->assertApiResponse($serviceProposal);
    }

    /**
     * @test
     */
    public function test_read_service_proposal()
    {
        $serviceProposal = ServiceProposal::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/service_proposals/'.$serviceProposal->id
        );

        $this->assertApiResponse($serviceProposal->toArray());
    }

    /**
     * @test
     */
    public function test_update_service_proposal()
    {
        $serviceProposal = ServiceProposal::factory()->create();
        $editedServiceProposal = ServiceProposal::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/service_proposals/'.$serviceProposal->id,
            $editedServiceProposal
        );

        $this->assertApiResponse($editedServiceProposal);
    }

    /**
     * @test
     */
    public function test_delete_service_proposal()
    {
        $serviceProposal = ServiceProposal::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/service_proposals/'.$serviceProposal->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/service_proposals/'.$serviceProposal->id
        );

        $this->response->assertStatus(404);
    }
}
