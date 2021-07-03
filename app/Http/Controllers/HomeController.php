<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function search()
    {
        return view('search');
    }

    public function account()
    {
        return view('account.index');
    }

    public function settings()
    {
        return view('account.settings');
    }
}
