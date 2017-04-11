<?php

namespace Tests\Feature;


use Illuminate\Support\Facades\Mail;
use App\Mail\AgentAppThankYouMailer;
use App\Mail\NotifyBrokerOfAgentApp;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AgentAppMailerTest extends TestCase
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

    public function testAgentAppMailer()
    {
        $agent = factory(\App\Agent::class)->make();

        Mail::to($agent->email)->send(new AgentAppThankYouMailer($agent));

    }

    public function testNotifyBrokerOfAgentApp()
    {

        $agent = factory(\App\Agent::class)->make();

        // send out the mailer
        Mail::to(env('BROKEREMAIL'))->send(new NotifyBrokerOfAgentApp($agent));

    }

}
