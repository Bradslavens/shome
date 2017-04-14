<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactFormTest extends TestCase
{
   
    use DatabaseMigrations;

    public function testIfFormExists()
    {
        $response = $this->get('contact');

        $response->assertStatus(200);

        $response->assertSee('form');
    }

    public function testContactFormSubmission()
    {
        $response = $this->post('contact', ['name'=>'Test Contact', 'email'=>'b@d.a', 'message'=>'Hello Contact Test', 'middle' => ""]);

        $response->assertSee('Thank');
    }

    public function testContactmodel()
    {
        $contact = factory(\App\Contact::class)->make(
            ['name'=>'joe']);

        $name = $contact->name;

        $this->assertEquals($name,'joe');
    }
}
