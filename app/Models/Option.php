<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public static function get($name)
    {
        return Option::all()->where('name', $name)->first()->value;
    }
}
