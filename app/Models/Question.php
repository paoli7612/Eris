<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public static function create($request)
    {
        $q = new static;
        $q->text = $request->text;
        $q->course_id = $request->course_id;
        $q->save();
    }
}
