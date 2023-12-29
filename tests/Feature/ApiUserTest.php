<?php

namespace Tests\Feature;

use App\Models\ApiUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_returns_authenticated_api_user()
    {
        // Arrange: Create a test user
        $apiUser = ApiUser::factory()->create();

        // Act: Make a request to the test endpoint with the token
        $response = $this->get('/api/', [
            'Accept'        => 'application/json',
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . $apiUser->api_token,
        ]);

        // Assert: Check if the user data is returned correctly
        $response->assertStatus(200)
            ->assertJsonFragment([
                'id'   => $apiUser->id,
                'name' => $apiUser->name,
            ]);
    }
}
