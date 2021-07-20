<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show(User $teacher)
    {
        return view('user', ['user' => $teacher]);
    }
}