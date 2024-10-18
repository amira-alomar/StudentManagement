@extends('layouts.app')

@section('content')
<style>
    .card {
    border-radius: 15px;
    transition: transform 0.2s ease;
}

.card:hover {
    transform: scale(1.05);
}

.card-body {
    padding: 40px;
}

</style>
<div class="container mt-5">
    <h1 class="text-center mb-4">Dashboard</h1>
    <div class="row">
        <!-- Students Section -->
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow">
                <a href="{{ route('students.index') }}" class="text-decoration-none text-dark">
                    <div class="card-body">
                        <i class="fas fa-users fa-5x mb-3"></i>
                        <h4>Students</h4>
                    </div>
                </a>
            </div>
        </div>

        <!-- Enrollment Section -->
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow">
                <a href="{{ route('enrollement.index') }}" class="text-decoration-none text-dark">
                    <div class="card-body">
                        <i class="fas fa-clipboard fa-5x mb-3"></i>
                        <h4>Enrollment</h4>
                    </div>
                </a>
            </div>
        </div>

        <!-- Courses Section -->
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow">
                <a href="{{ route('courses.index') }}" class="text-decoration-none text-dark">
                    <div class="card-body">
                        <i class="fas fa-book fa-5x mb-3"></i>
                        <h4>Courses</h4>
                    </div>
                </a>
            </div>
        </div>

        <!-- Another Section -->
        <div class="col-md-3 mb-4">
            <div class="card text-center shadow">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card-body">
                        <i class="fas fa-cog fa-5x mb-3"></i>
                        <h4>Settings</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
