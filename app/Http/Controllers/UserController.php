<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function settings(User $user)
    {
        return view('user.settings', [
            'user' => $user
        ]);
    }

    public function index(Request $request)
    {
        return view('user.teachers', [
            'teachers' => User::teachers()->paginate(12)->withQueryString()
        ]);
    }

    public function show(User $user)
    {
        if ($user->isMe()) {
            return redirect()->route('account');
        }

        return view('user.show', [
            'user' => $user->name ? $user : auth()->user()
        ]);
    }
}
