<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:students,email,',  
            'academic_year' => 'required|in:First Year,Second Year,Third Year,Fourth Year,Fifth Year',
            'marks' => 'nullable|numeric|min:0|max:100',
        ]);

        $status=$this->calculateStatus($request->marks);
        student::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'academic_year'=>$request->academic_year,
                'marks'=>$request->marks,
                'status'=>$status,
            ]);
            return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id); 
        return view('students.edit', compact('student')); 
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:students,email,'. $id, 
            'academic_year' => 'required|in:First Year,Second Year,Third Year,Fourth Year,Fifth Year',
            'marks' => 'nullable|numeric|min:0|max:100',
        ]);

        $student=student::find($id);
        $student->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'academic_year'=>$request->academic_year,
            'marks'=>$request->marks,
            'status' => $this->calculateStatus($request->marks)
        ]);
        return redirect()->route('students.index');
    }

    
    public function destroy($id)
    {
        student::destroy($id);
        return redirect()->route('students.index');
    }

    private function calculateStatus($marks)
    {
    if ($marks >= 90) {
        return 'Excellent';
    } elseif ($marks >= 70) {
        return 'Good';
    } elseif ($marks >= 50) {
        return 'Average';
    } else {
        return 'Poor';
    }
    }
}
