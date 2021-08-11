<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show(User $teacher)
    {
        return view('user.teacher', [
            'teacher' => $teacher
        ]);
    }
}
