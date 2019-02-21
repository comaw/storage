<?php

namespace Tests\Feature;

use App\Models\Job;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class JobsTest
 *
 * @package Tests\Feature
 */
class JobsTest extends TestCase
{
    /** @var array $job */
    protected $job;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testJob()
    {
        $response = $this->post('/api/jobs', [
            'name' => 'test',
            'url' => 'http://test.com/image.jpg',
            'status' => Job::STATUS_ERROR,
        ]);

        $response->assertStatus(201);
        $this->job = $response->content();
        $this->job = json_decode($this->job, true);
        $this->assertArrayHasKey('data', $this->job);
        $this->assertArrayHasKey(0, $this->job['data']);
        $this->job = $this->job['data'][0];
        $this->assertArrayHasKey('id', $this->job);
        $this->assertArrayHasKey('name', $this->job);
        $this->assertArrayHasKey('url', $this->job);
        $this->assertArrayHasKey('status', $this->job);
        $this->assertEquals($this->job['status'],  Job::listOfStatus()[Job::STATUS_ERROR]);
        $this->assertEquals($this->job['name'],  'test');
        $this->assertEquals($this->job['url'],  'http://test.com/image.jpg');

        $response = $this->get('/api/jobs');

        $response->assertStatus(200);
        $job = $response->content();
        $job = json_decode($job, true);
        $this->assertArrayHasKey('data', $job);
        $this->assertArrayHasKey(0, $job['data']);

        $response = $this->get('/api/jobs/' . $this->job['id']);

        $response->assertStatus(200);
        $job = $response->content();
        $job = json_decode($job, true);
        $this->assertArrayHasKey('data', $job);
        $this->assertArrayHasKey(0, $job['data']);
        $job = $job['data'][0];
        $this->assertEquals($job['url'],  $this->job['url']);
        $this->assertEquals($job['name'],  $this->job['name']);
        $this->assertEquals($job['status'],  $this->job['status']);

        $response = $this->put('/api/jobs/' . $this->job['id'], ['name' => 'test2']);
        $response->assertStatus(201);

        $job = $response->content();
        $job = json_decode($job, true);
        $this->assertArrayHasKey('data', $job);
        $this->assertArrayHasKey(0, $job['data']);
        $job = $job['data'][0];
        $this->assertEquals($job['url'],  $this->job['url']);
        $this->assertEquals('test2',  $job['name']);

        $response = $this->delete('/api/jobs/' . $this->job['id']);
        $response->assertStatus(204);
    }
}
