<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function store()
    {
        Post::create([
            'body' => request('body'),
            'user_id' => auth()->user()->id
        ]);

        return redirect(route('posts'));
    }
}
