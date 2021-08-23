<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function settings(User $user)
    {
        return view('user.settings', [
            'user' => $user
        ]);
    }

    public function index()
    {
        return view('user.teachers', [
            'teachers' => User::filter()->paginate(12)
        ]);
    }

    public function show(User $user)
    {
        if ($user->id == auth()->id()) {
            return redirect(route('account'));
        }

        return view('user.show', [
            'user' => $user
        ]);
    }

    public function edit(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('images'), $imageName);
        }
        
        request()->validate([
            'name' => 'required|string|unique:users,name|alpha_num'
        ]);

        auth()->user()->update([
            'name' => request('name'),
            'avatar' => $imageName ?? null
        ]);

        return redirect(route('account'))->with('success', 'updated account');
    }
}
