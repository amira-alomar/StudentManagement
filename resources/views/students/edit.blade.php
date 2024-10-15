@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Student Information</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="academic_year">Academic Year</label>
            <select class="form-control" id="academic_year" name="academic_year">
                <option value="First Year" {{ $student->academic_year == 'First Year' ? 'selected' : '' }}>First Year</option>
                <option value="Second Year" {{ $student->academic_year == 'Second Year' ? 'selected' : '' }}>Second Year</option>
                <option value="Third Year" {{ $student->academic_year == 'Third Year' ? 'selected' : '' }}>Third Year</option>
                <option value="Fourth Year" {{ $student->academic_year == 'Fourth Year' ? 'selected' : '' }}>Fourth Year</option>
                <option value="Fifth Year" {{ $student->academic_year == 'Fifth Year' ? 'selected' : '' }}>Fifth Year</option>
            </select>
            @error('academic_year')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>        
        <div class="form-group">
            <label for="marks">Marks (optional):</label>
            <input type="number" name="marks" id="marks" class="form-control" value="{{ $student->marks }}">
            @error('marks')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-check"></i> Save Changes
        </button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
