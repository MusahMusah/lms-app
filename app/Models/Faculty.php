<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    // add a one to many relationship with the Department model
    public function departments()
    {
        return $this->hasMany('App\Models\Department');
    }
}
