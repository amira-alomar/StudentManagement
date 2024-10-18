@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Course</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="course_name">Name of the Course</label>
            <input type="text" class="form-control" value="{{ old('course_name', $course->course_name) }}" id="course_name" name="course_name" required>
            @error('course_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" value="{{ old('description', $course->description) }}" id="description" name="description" required>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Save Changes
        </button>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
