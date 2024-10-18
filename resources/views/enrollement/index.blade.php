@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Students and Their Courses</h1>

    <a href="{{ route('enrollement.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Register New Student
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Email</th>
                <th>Enrolled Courses</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        @if($student->courses->isEmpty())
                            No courses enrolled
                        @else
                            <ul>
                                @foreach($student->courses as $course)
                                    <li>{{ $course->course_name }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
