<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Zillow\ZillowClient;

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

    public function testZillowAPI()
    {
        $client = new ZillowClient('X1-ZWz1dh454d9sej_5dugt');

        $response = $client->GetSearchResults(['address' => '2460 MacKenzie Creek Rd.', 'citystatezip' => 'Chula Vista, CA 91914']);

        $zpid = $response['results']['result']['zpid'];

        $this->assertEquals($zpid, '52521932');
    }

}
