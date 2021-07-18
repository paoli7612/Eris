<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function professori()
    {
        return view('professori', [
            'professori' => User::all()->where('type', 'admin')
        ]);
    }

    public function materie()
    {
        return view('materie');
    }

    public function lezioni()
    {
        return view('lessons', [
            'lessons' => Lesson::all()
        ]);
    }
}
