<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $filename = $request->image->getClientOriginalName();
        dd($filename);
        $file = $request['image'];
        $file->store('public');
        Storage::disk('public')->put($filename, $file);
        //return redirect()->back();
    }
}
