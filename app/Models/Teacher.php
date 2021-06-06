<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function route()
    {
        return 'teachers/' . $this->slug;
    }

    public function complete_name()
    {
        return $this->name . " " . $this->surname;
    }
}