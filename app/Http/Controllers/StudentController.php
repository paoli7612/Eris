<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(User $user)
    {
        return view('student', [
            'student' => $user
        ]);
    }
}
