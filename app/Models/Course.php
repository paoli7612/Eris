<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    public static function make($title, $year, $semester)
    {
        $course = new static;
        $course->title = $title;
        $course->year = $year;
        $course->slug = Str::slug($title, '_');
        return $course;
    }

    public function route()
    {
        return '/courses/' . $this->slug;
    }
}
