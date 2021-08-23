<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('user.teachers', [
            'teachers' => User::all()
        ]);
    }

    public function show(User $teacher)
    {
        return view('user.show', [
            'user' => $teacher
        ]);
    }
}
