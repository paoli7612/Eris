<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function follow(User $user)
    {
        $me = auth()->user();
        if ($me->isFollowing($user)) {
            $me->unfollow($user);
        } else {
            $me->follow($user);
        }
        return redirect(route('account', $user));
    }
}
