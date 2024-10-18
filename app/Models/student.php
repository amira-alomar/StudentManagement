<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'marks', 'academic_year', 'status'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'students_courses');
    }
}
