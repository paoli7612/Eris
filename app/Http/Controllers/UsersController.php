<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function info(User $user)
    {
        return view('user.info', [
            'user' => $user
        ]);
    }
}
