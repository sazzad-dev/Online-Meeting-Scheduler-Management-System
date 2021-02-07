<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Event;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       $response = $this->get('/save-user');

        $response->assertStatus(405);
    }
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
