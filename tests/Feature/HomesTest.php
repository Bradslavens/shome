<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomesTest extends TestCase
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

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomesPageExists()
    {
        $response = $this->get('/homes');

        $response->assertStatus(200);

        $response->assertSee('<input');

    }

    public function testHomeSearchPost()
    {
        $response = $this->post('homes');

        $response->assertSee('homes');

        $response->assertStatus(200);
    }


}
