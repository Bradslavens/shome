<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class careersApplicationTest extends TestCase
{

    use DatabaseMigrations;
    

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testIfFormExists()
    {
        $response = $this->get('careers/1');

        $response->assertStatus(200);

        $response->assertSee('form');
    }

    public function testAddAgentApplicantFormSubmission()
    {
        $response = $this->post('careers', ['name'=>'Test Agent', 'email'=>'b@d.a', 'bre'=>'11111110', 'source'=>'1', 'middle' => ""]);

        $response->assertSee('Thank');
    }

    public function testAgentmodel()
    {
        $agent = factory(\App\Agent::class)->make(
            ['name'=>'joe']);

        $name = $agent->name;

        $this->assertEquals($name,'joe');
    }

}
