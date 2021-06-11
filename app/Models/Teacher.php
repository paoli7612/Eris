<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\Teaches;

class Teacher extends Model
{
    use HasFactory;

    public static function make($name, $surname)
    {
        $teacher = new static;
        $teacher->name = $name;
        $teacher->surname = $surname;
        $teacher->slug = Str::slug($teacher->complete_name(), '_');
        return $teacher;
    }

    public function route()
    {
        return 'teachers/' . $this->slug;
    }

    public function complete_name()
    {
        return $this->name . " " . $this->surname;
    }
}
