<?php

namespace Tests\Feature;

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseResourceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_if_get_given_course(): void
    {
        $course = Course::factory()->create(['dicipline_id' => null]);
        $response = $this->get("/api/v1/courses/{$course->id}");
        $response->assertStatus(200);
        $response->assertJsonFragment(['id' => $course->id]);
    }
}
