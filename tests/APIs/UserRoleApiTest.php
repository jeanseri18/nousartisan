<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\UserRole;

class UserRoleApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_user_role()
    {
        $userRole = UserRole::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/user_roles', $userRole
        );

        $this->assertApiResponse($userRole);
    }

    /**
     * @test
     */
    public function test_read_user_role()
    {
        $userRole = UserRole::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/user_roles/'.$userRole->id
        );

        $this->assertApiResponse($userRole->toArray());
    }

    /**
     * @test
     */
    public function test_update_user_role()
    {
        $userRole = UserRole::factory()->create();
        $editedUserRole = UserRole::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/user_roles/'.$userRole->id,
            $editedUserRole
        );

        $this->assertApiResponse($editedUserRole);
    }

    /**
     * @test
     */
    public function test_delete_user_role()
    {
        $userRole = UserRole::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/user_roles/'.$userRole->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/user_roles/'.$userRole->id
        );

        $this->response->assertStatus(404);
    }
}
