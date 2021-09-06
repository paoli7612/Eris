<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('main.home', [
            'lesson' => Lesson::latest()->first()
        ]);
    }

    public function account()
    {
        return view('main.account', [
            'user' => auth()->user()
        ]);
    }

    public function settings()
    {
        return view('main.settings', [
            'user' => auth()->user()
        ]);
    }

    public function delete()
    {
        return view('main.delete');
    }

    public function remove()
    {
        $user = auth()->user();
        Auth::logout();
        if ($user->delete()) {
            return redirect()->route('welcome');
        } else {
            return redirect()->route('home');
        }
    }

    public function logout()
    {
        return view('main.logout');
    }

    
}
