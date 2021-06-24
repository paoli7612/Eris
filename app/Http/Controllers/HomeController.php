<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        request()->validate(['email' => 'required|email']);

        Mail::raw('it worca', function ($message) {
            $message->to(request('email'))
                ->subject('Hello there');
        });

        return redirect('/');
    }
}
