<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NotFoundTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_not_found_json__response(): void
    {
        $response = $this->get('/api/v1/any');

        $response->assertStatus(404);
        $response->assertJsonFragment([
            'success' => false,
            'message' => 'Ressource introuvable',
        ]);
    }
}
