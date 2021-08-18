<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('user.show', [
            'user' => $user
        ]);
    }

    public function settings(User $user)
    {
        return view('user.settings', [
            'user' => $user
        ]);
    }

    public function edit(User $user, Request $request)
    {
        $imageName = time().'.'.$request->avatar->extension();
        $request->avatar->move(public_path('images'), $imageName);

        $user->avatar = $imageName;
        $user->save();

        return redirect()->back()->with('sucess', 'updated account');
    }
}
