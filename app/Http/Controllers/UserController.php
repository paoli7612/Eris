<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function student(User $user)
    {
        return view('account', [
            'user' => $user
        ]);
    }

    public function teacher(User $user)
    {
        return view('teacher', [
            'user' => $user
        ]);
    }
}
