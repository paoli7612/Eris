<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function follow(User $user)
    {
        $me = auth()->user();
        if ($me->is_following($user)) {
            $me->unfollow($user);
        } else {
            $me->follow($user);
        }
    }
}
