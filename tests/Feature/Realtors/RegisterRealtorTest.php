<?php

namespace Tests\Feature\Realtors;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterRealtorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_realtor_registration()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
