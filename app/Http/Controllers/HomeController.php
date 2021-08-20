<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('home');
    }

    public function search()
    {
        return view('home');
    }

    public function account()
    {
        return view('account', [
            'user' => auth()->user()
        ]);
    }

    public function settings()
    {
        return view('settings', [
            'user' => auth()->user()
        ]);
    }

    public function settings_store()
    {
        dd(request()->all());
    }

    public function delete_account()
    {
        return view('delete.account');
    }
}
