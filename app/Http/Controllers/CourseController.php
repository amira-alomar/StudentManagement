<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    
    public function index()
    {
        $courses=Course::all();
        return view('courses.index',compact('courses'));
    }

    
    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|min:2|max:255',
            'description' => 'required|string|min:2|max:255',  
        ]);

        course::create([
                'course_name'=>$request->course_name,
                'description'=>$request->description,
            ]);
            return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
       //
    }


    public function edit(course $course)
    {
        //$course = course::find($course); 
        return view('courses.edit', compact('course')); 
    }

    public function update(Request $request, course $course)
    {
        $request->validate([
            'course_name' => 'required|string|min:2|max:255',
            'description' => 'required|string|min:2|max:255',  
        ]);

        //$course=course::find($course);
        $course->update([
            'course_name'=>$request->course_name,
            'description'=>$request->description,
        ]);
        return redirect()->route('courses.index');
    }


    public function destroy(course $course)
    {
        $course->delete();

    return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
