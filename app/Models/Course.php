<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public static function new($title)
    {
        $course = new static;
        $course->title = $title;
        $course->save();
    }
}
