<?php namespace Tests\Repositories;

use App\Models\UserRole;
use App\Repositories\UserRoleRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class UserRoleRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var UserRoleRepository
     */
    protected $userRoleRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->userRoleRepo = \App::make(UserRoleRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_user_role()
    {
        $userRole = UserRole::factory()->make()->toArray();

        $createdUserRole = $this->userRoleRepo->create($userRole);

        $createdUserRole = $createdUserRole->toArray();
        $this->assertArrayHasKey('id', $createdUserRole);
        $this->assertNotNull($createdUserRole['id'], 'Created UserRole must have id specified');
        $this->assertNotNull(UserRole::find($createdUserRole['id']), 'UserRole with given id must be in DB');
        $this->assertModelData($userRole, $createdUserRole);
    }

    /**
     * @test read
     */
    public function test_read_user_role()
    {
        $userRole = UserRole::factory()->create();

        $dbUserRole = $this->userRoleRepo->find($userRole->id);

        $dbUserRole = $dbUserRole->toArray();
        $this->assertModelData($userRole->toArray(), $dbUserRole);
    }

    /**
     * @test update
     */
    public function test_update_user_role()
    {
        $userRole = UserRole::factory()->create();
        $fakeUserRole = UserRole::factory()->make()->toArray();

        $updatedUserRole = $this->userRoleRepo->update($fakeUserRole, $userRole->id);

        $this->assertModelData($fakeUserRole, $updatedUserRole->toArray());
        $dbUserRole = $this->userRoleRepo->find($userRole->id);
        $this->assertModelData($fakeUserRole, $dbUserRole->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_user_role()
    {
        $userRole = UserRole::factory()->create();

        $resp = $this->userRoleRepo->delete($userRole->id);

        $this->assertTrue($resp);
        $this->assertNull(UserRole::find($userRole->id), 'UserRole should not exist in DB');
    }
}
