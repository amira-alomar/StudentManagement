@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Courses</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add New Course
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->description }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
