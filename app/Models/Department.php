<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // create a relationship between the department and courses
    public function courses()
    {
        return $this->hasMany('App\Models\Courses');
    }
}
