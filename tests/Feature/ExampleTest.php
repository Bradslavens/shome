<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->get('/')->assertSee('Slavens Realty');
    }

    public function testLoginExists()
    {
        $result = $this->get('/login');

        $result->assertStatus(200);
    }

    public function testRegisterExists()
    {
        $result = $this->get('/register');

        $result->assertStatus(200);
    }

    public function testResetPasswordExists()
    {
        $result = $this->get('/password/reset');

        $result->assertStatus(200);
    }
}
