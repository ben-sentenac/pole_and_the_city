<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Dicipline;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DiciplinesListTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_diciplines_list_returns_paginated_data_correctly(): void
    {

        Dicipline::factory(15)->create();
        $response = $this->get('/api/v1/diciplines');

        $response->assertStatus(200);
        $response->assertJsonCount(15, 'data');
    }

    public function test_diciplines_list_filtering_correctly_when_courses_optionnal_param_missing()
    {
        $dicipline = Dicipline::factory()->create([
            'category_id' => null,
        ]);
        $course = Course::factory()->create(['dicipline_id' => $dicipline->id]);
        $response = $this->get("/api/v1/diciplines/{$dicipline->id}");
        $response->assertStatus(200);
        $response->assertJsonMissing(['id' => $course->id]);
    }

    public function test_diciplines_list_with_courses_optional_param()
    {
        $dicipline = Dicipline::factory()->create([
            'category_id' => null,
        ]);
        $course = Course::factory()->create(['dicipline_id' => $dicipline->id]);
        $response = $this->get("/api/v1/diciplines/{$dicipline->id}?courses=1");
        $response->assertStatus(200);
        $response->assertJsonFragment(['id' => $course->id]);
    }

    public function test_diciplines_list_without_courses_if_optional_param_is_false()
    {
        $dicipline = Dicipline::factory()->create([
            'category_id' => null,
        ]);
        $course = Course::factory()->create(['dicipline_id' => $dicipline->id]);
        $response = $this->get("/api/v1/diciplines/{$dicipline->id}?courses=0");
        $response->assertStatus(200);
        $response->assertJsonMissing(['id' => $course->id]);
    }
}
