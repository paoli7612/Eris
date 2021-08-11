<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function all()
    {
        return view('user.teachers', [
            'teachers' => User::all()
                ->where('type', 'teacher')
        ]);
    }

    public function show(User $teacher)
    {
        return view('user.teacher', [
            'teacher' => $teacher
        ]);
    }
}
