<?php namespace Tests\Repositories;

use App\Models\Worker;
use App\Repositories\WorkerRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class WorkerRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var WorkerRepository
     */
    protected $workerRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->workerRepo = \App::make(WorkerRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_worker()
    {
        $worker = Worker::factory()->make()->toArray();

        $createdWorker = $this->workerRepo->create($worker);

        $createdWorker = $createdWorker->toArray();
        $this->assertArrayHasKey('id', $createdWorker);
        $this->assertNotNull($createdWorker['id'], 'Created Worker must have id specified');
        $this->assertNotNull(Worker::find($createdWorker['id']), 'Worker with given id must be in DB');
        $this->assertModelData($worker, $createdWorker);
    }

    /**
     * @test read
     */
    public function test_read_worker()
    {
        $worker = Worker::factory()->create();

        $dbWorker = $this->workerRepo->find($worker->id);

        $dbWorker = $dbWorker->toArray();
        $this->assertModelData($worker->toArray(), $dbWorker);
    }

    /**
     * @test update
     */
    public function test_update_worker()
    {
        $worker = Worker::factory()->create();
        $fakeWorker = Worker::factory()->make()->toArray();

        $updatedWorker = $this->workerRepo->update($fakeWorker, $worker->id);

        $this->assertModelData($fakeWorker, $updatedWorker->toArray());
        $dbWorker = $this->workerRepo->find($worker->id);
        $this->assertModelData($fakeWorker, $dbWorker->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_worker()
    {
        $worker = Worker::factory()->create();

        $resp = $this->workerRepo->delete($worker->id);

        $this->assertTrue($resp);
        $this->assertNull(Worker::find($worker->id), 'Worker should not exist in DB');
    }
}
