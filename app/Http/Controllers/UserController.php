<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(User $user)
    {
        return view($user->type, [
            'user' => $user
        ]);
    }

    public function store_image(Request $request)
    {
        if ($request->hasFile('image')) {
            $randomize = rand(111111, 999999);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = $randomize . '.' . $extension;
            echo $filename;
            echo $extension;
            dd($request->image->store('storage/uploads/' . $filename));
        }
    }
}
