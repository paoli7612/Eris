<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeachersController extends Controller
{
    public function index()
    {
        return view('teachers.index', [
            'teachers' => Teacher::all()
        ]);
    }

    public function show($slug)
    {
        return view('teachers.show', [
            'teacher' => Teacher::where('slug', $slug)->first()
        ]);
    }
}
