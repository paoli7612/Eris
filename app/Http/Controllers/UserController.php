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

    public function index()
    {
        return view('user.teachers', [
            'teachers' => User::teachers()->paginate(12)->withQueryString()
        ]);
    }

    public function show(User $user)
    {
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
        
        if (auth()->user()->name != request('name')) {
            request()->validate([
                'name' => 'required|string|unique:users,name|alpha_num'
            ]);
        }

        auth()->user()->update([
            'name' => request('name'),
            'avatar' => $imageName ?? null
        ]);

        return redirect(route('account'))->with('success', 'updated account');
    }

    public function logout()
    {
        return view('logout');
    }
}
