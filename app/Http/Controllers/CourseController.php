<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Http\Requests\StorecourseRequest;
use App\Http\Requests\UpdatecourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = course::with('subjects')->get();
        return (["course" => courseResource::collection($courses)]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecourseRequest $request)
    {
        $course = Course::create($request->validated());
        return new CourseResource($course);
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        return new CourseResource($course);
    }

    
        /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecourseRequest $request, course $course)
    {
        $course -> update($request->validated());
        return new CourseResource($course);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $course)
    {
        $course->delete();
        return response(null,250);
    }
}
