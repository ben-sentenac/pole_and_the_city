<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use App\Models\Course;
use Illuminate\Testing\Fluent\AssertableJson;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminCourseTest extends TestCase
{
    /**
     * A basic feature test example.
     */
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
        $response = $this->actingAs($user)->postJson('api/v1/admin/courses', $payload);

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
        $course = course::factory()->create([
            'dicipline_id' => null,
        ]);
        $response = $this->actingAs($user)->putJson("api/v1/admin/courses/{$course->id}", [
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

    public function test_it_store_course(): void
    {
        $user = User::factory()->create();
        $payload = [
            'name' => 'CoursX',
            'description' => 'Une courte Description du coursX',
        ];
        $response = $this->actingAs($user)->postJson('api/v1/admin/courses', $payload);
        $response->assertStatus(201);
        $response->assertJsonFragment(['name' => 'CoursX']);

    }

    public function test_it_update_course(): void
    {
        $user = User::factory()->create();
        $course = Course::factory()->create(['dicipline_id' => null]);
        $payload = [
            'name' => 'cours updated',
            'description' => $course->description,
        ];
        $response = $this->actingAs($user)->putJson("api/v1/admin/courses/{$course->id}", $payload);
        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'cours updated']);

    }

    public function test_it_soft_delete()
    {
        $user = User::factory()->create();
        $course = Course::factory()->create([
            'dicipline_id' => null,
        ]);
        $response = $this->actingAs($user)->deleteJson("api/v1/admin/courses/{$course->id}");
        $response->assertOk();
        $this->assertSoftDeleted('courses', ['id' => $course->id]);
    }

    public function test_it_return_401_status() {
        $payload = [
            'name' => 'DiciplineX',
            'description' => 'Une courte Description de la diciplineX',
        ];
        $response = $this->postJson('api/v1/admin/courses', $payload);
        $response->assertStatus(401);
    }
}
