<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
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

    public function edit(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('images'), $imageName);
        }
        
        if (auth()->user()->name != request('name')) {
            request()->validate([
                'name' => 'required|string|unique:users,name|alpha',
                'surname' => 'required|string|unique:users,name|alpha'
            ]);
        }

        auth()->user()->update([
            'name' => request('name'),
            'wsurname' => request('surname'),
            'avatar' => $imageName ?? null
        ]);

        return redirect()->route('account')->with('success', 'updated account');
    }
}
