<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function load()
    {
        return view('material.load', [
            'lessons' => Lesson::of(auth()->id())->get()
        ]);
    }
}
