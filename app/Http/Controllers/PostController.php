<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
        Post::create([
            'body' => request('body'),
            'user_id' => auth()->user()->id
        ]);
    
        return redirect()->back();
    }

    public function user()
    {
        $user = auth()->user();
        return view('posts', [
            'posts' => Post::where('user_id', $user->id)->get()
        ]);
    }
}
