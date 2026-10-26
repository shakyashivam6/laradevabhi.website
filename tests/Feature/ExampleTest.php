<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Stephen Rkal');
        $response->assertSee('sterk-footer-section');
        $response->assertSee('css/style.css');
        $response->assertSee('js/main.js');
    }
}
