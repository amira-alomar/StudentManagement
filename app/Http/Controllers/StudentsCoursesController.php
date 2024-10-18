<?php

namespace App\Http\Controllers;

use App\Models\students_courses;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\course;

class StudentsCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= student::all();
        $courses= course::all();
        return view('enrollement.index',compact('students','courses'));
    }

    public function create()
    {
        $students= student::all();
        $courses= course::all();
        return view('enrollement.register',compact('students','courses'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student = Student::where('id', $request->student_id)
            ->where('name', $request->student_name)
            ->first();

        if ($student) {
            $student->courses()->attach($request->course_id);

            return redirect()->route('enrollement.index')->with('success', 'Student enrolled successfully');
        } else {
            return redirect()->back()->withErrors('Student not found.');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students_courses  $students_courses
     * @return \Illuminate\Http\Response
     */
    public function show(students_courses $students_courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students_courses  $students_courses
     * @return \Illuminate\Http\Response
     */
    public function edit(students_courses $students_courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\students_courses  $students_courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, students_courses $students_courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students_courses  $students_courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(students_courses $students_courses)
    {
        //
    }
}
