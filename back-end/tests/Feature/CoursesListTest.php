<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Dicipline;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CoursesListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_if_courses_pagination_works_correctly(): void
    {
        $dicipline = Dicipline::factory()->create(
            [
                'category_id' => null,
            ]
        );
        $courses = Course::factory(25)->create(['dicipline_id' => $dicipline->id]);
        $response = $this->get('/api/v1/courses');
        $response->assertStatus(200);
        //pagination set 15 by default;
        $response->assertJsonCount(15, 'data');
        $response->assertJsonPath('meta.current_page', 1);
        $response->assertJsonPath('meta.last_page', 2);
    }
}
