<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequest;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StaticPagesTest extends TestCase
{

    use DatabaseMigrations;

    
    public function testAboutUs()
    {
        $response = $this->get('/about');

        $response->assertSee('About Us');

        $response->assertStatus(200);
    }

    public function testContactUsPage()
    {
        $response = $this->get('/contact');

        $response->assertSee('form');

        $response->assertStatus(200);
    }

    public function testContactFormSubmission()
    {
        $contact = factory(\App\Contact::class)->make();

        Mail::to(env('BROKEREMAIL'))->send(new ContactRequest($contact));

        $response = $this->post('/contact', ['name'=> 'test contact', 'email'=>'t@t.t', 'message'=>'Howdy Broker']);

        $response->assertSee('Thank');

        $response->assertStatus(200);

    }

}
