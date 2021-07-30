<?php

namespace App\Http\Controllers;

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

    public function account()
    {
        return view('account', [
            'user' => auth()->user()
        ]);
    }

    public function teachers()
    {
        return view('teachers', [
            'teachers' => User::all()->where('type', 'teacher')
        ]);
    }

    public function new_lesson()
    {
        return view('lesson.new');
    }
}
