<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class propertySearchTest extends TestCase
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

    public function testPropertSearchSubmission()
    {
        // post the request
        $response = $this->post('/homes', ['address' => '2460 MacKenzie Creek Rd.', 'citystatezip' => 'Chula Vista, CA 91914']);
        
        $response->assertSee('details');

    }

    

}
