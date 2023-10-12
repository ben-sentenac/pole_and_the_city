<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use App\Models\Dicipline;
use Illuminate\Testing\Fluent\AssertableJson;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminDiciplineTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_it_return_validation_errors_when_store(): void
    {
        $user = User::factory()->create();
        $payload = [
            'name' => '',
            'description' => null,
        ];
        $response = $this->actingAs($user)->postJson('api/v1/admin/diciplines', $payload);

        $response->assertStatus(400);
        $response->assertJson(
            fn (AssertableJson $json) => $json->where('success', false)
                ->where('message', 'Validation Errors')
                ->etc()
        );
    }

    public function test_it_return_validation_errors_when_update(): void
    {
        $user = User::factory()->create();
        $dicipline = Dicipline::factory()->create();
        $response = $this->actingAs($user)->putJson("api/v1/admin/diciplines/{$dicipline->id}", [
            'name' => '',
            'description' => null,
        ]);

        $response->assertStatus(400);
        $response->assertJson(
            fn (AssertableJson $json) => $json->where('success', false)
                ->where('message', 'Validation Errors')
                ->etc()
        );
    }

    public function test_it_store_dicipline(): void
    {
        $user = User::factory()->create();
        $payload = [
            'name' => 'DiciplineX',
            'description' => 'Une courte Description de la diciplineX',
            'category_id' => null,
        ];
        $response = $this->actingAs($user)->postJson('api/v1/admin/diciplines', $payload);
        $response->assertStatus(201);
        $response->assertJsonFragment(['name' => 'DiciplineX']);

    }

    public function test_it_update_dicipline(): void
    {
        $user = User::factory()->create();
        $dicipline = Dicipline::factory()->create();
        $payload = [
            'name' => 'Dicipline updated',
            'description' => $dicipline->description,
        ];
        $response = $this->actingAs($user)->putJson("api/v1/admin/diciplines/{$dicipline->id}", $payload);
        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Dicipline updated']);

    }

    public function test_it_soft_delete()
    {
        $user = User::factory()->create();
        $dicipline = Dicipline::factory()->create();
        $response = $this->actingAs($user)->deleteJson("api/v1/admin/diciplines/{$dicipline->id}");
        $response->assertOk();
        $this->assertSoftDeleted('diciplines', ['id' => $dicipline->id]);
    }

    public function test_it_return_401_status() {
        $payload = [
            'name' => 'CoursX',
            'description' => 'Une courte Description du coursX',
        ];
        $response = $this->postJson('api/v1/admin/courses', $payload);
        $response->assertStatus(401);
    }
}
