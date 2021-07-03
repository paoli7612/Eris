<?php

namespace App\Http\Controllers;

use App\Mail\Post as MailPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function send(Post $post)
    {
        if (! Auth::check()) {
            redirect(route('login'));
        }
        
        Mail::to(auth()->user()->email)
            ->send(new \App\Mail\Post());

        return redirect('/info')
            ->with('message', 'Email sent!');
    }
}
