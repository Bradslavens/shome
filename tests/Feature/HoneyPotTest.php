<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HoneyPotTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testHoneyPotCareersFormBotReturnsError()
    {
        $response = $this->post('careers', ['name'=>'Test Agent', 'email'=>'b@d.a', 'bre'=>'11111110', 'source'=>'1', 'middle'=>'B']);

        $response->assertSee('Error');

    }
}
