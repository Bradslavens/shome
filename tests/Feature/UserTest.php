<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
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

    public function testUsersExists()
    {
        $user = factory(\App\User::class)->make([
            'email' => 'brad@g.com',
            ]);
        
        $email = $user->email;

        $this->assertEquals($email, 'brad@g.com');


    }
}
