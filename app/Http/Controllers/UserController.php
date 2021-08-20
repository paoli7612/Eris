<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        if ($user->id == auth()->id()) {
            return redirect(route('account'));
        }
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

    public function edit(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('images'), $imageName);
        }
        
        auth()->user()->update([
            'name' => request('name'),
            'avatar' => $imageName ?? null
        ]);
        dd($imageName ?? null);
        return redirect(route('account'))->with('sucess', 'updated account');
    }
}
