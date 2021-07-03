<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function info(User $user)
    {
        return view('account', [
            'user' => $user
        ]);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class);
    }

    public function follow(User $user)
    {
        return 'asd';
    }
}
