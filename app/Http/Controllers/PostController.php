<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
}
