<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\ErrorHandler\Collecting;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('home', [
            'lesson' => Lesson::latest()->first()
        ]);
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

    public function delete_account()
    {
        return view('delete.account');
    }
}
