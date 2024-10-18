<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable=['course_name','description'];

    public function students(){
        return $this->belongsToMany(Student::class, 'students_courses');
    }
}
