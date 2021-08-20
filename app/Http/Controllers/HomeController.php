<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
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
        return view('home');
    }

    public function search()
    {
        $word = request('u');
        
        if (strlen($word) < 2) {
            return redirect('lessons');
        }

        $lessons = collect([]);
        foreach (DB::table("lessons")
            ->where("title", "like", "%$word%")
            ->get() as $row) {
            $lessons->add(Lesson::find($row->id));
        }
        return view('lesson.all', [
            'lessons' => $lessons
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

    public function settings_store()
    {
        dd(request()->all());
    }

    public function delete_account()
    {
        return view('delete.account');
    }
}
