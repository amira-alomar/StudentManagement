@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Enroll in a Course</h1>

    <form action="{{ route('enrollement.store') }}" method="POST">
        @csrf
        <!-- Student ID Input -->
        <div class="form-group">
            <label for="student_id">Enter Your Student ID</label>
            <input type="text" name="student_id" value="{{ old('student_id') }}" id="student_id" class="form-control" required>
            @error('student_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Student Name Input -->
        <div class="form-group">
            <label for="student_name">Enter Your Name</label>
            <input type="text" name="student_name" value="{{ old('student_name') }}" id="student_name" class="form-control" required>
        </div>

        <!-- Course Selection -->
        <div class="form-group">
            <label for="course_id">Select Course</label>
            <select name="course_id" id="course_id" class="form-control"  required>
                <option value="">-- Select Course --</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                @endforeach
            </select>
            @error('course_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Enroll</button>
        <a href="{{ route('enrollement.index') }}" class="btn btn-secondary">Back to Students</a>
    </form>
@endsection
