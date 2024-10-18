<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentsCoursesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route for the main dashboard page
Route::get('/', function () {
    return view('main.index');
})->name('dashboard');

// Resource routes for students, courses, and enrollments
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('enrollement', StudentsCoursesController::class);

