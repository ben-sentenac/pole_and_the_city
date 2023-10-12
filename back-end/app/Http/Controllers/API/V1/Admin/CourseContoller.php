<?php

namespace App\Http\Controllers\API\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\CourseRequest;
use App\Http\Resources\V1\CourseResource;
use App\Models\Course;

class CourseContoller extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        //
        $course = Course::create($request->validated());

        return new CourseResource($course);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Course $course, CourseRequest $request)
    {
        //
        $course->update($request->validated());

        return new CourseResource($course);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
        return $course->delete();
    }
}
