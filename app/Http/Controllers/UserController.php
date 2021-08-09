<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function teacher(User $teacher)
    {
        return view('teacher.show', [
            'user' => $teacher
        ]);
    }

    public function teachers()
    {
        return view('teacher.all', [
            'teachers' => User::all()
                ->except(auth()->user()->id)
                ->where('type', 'teacher')
        ])->with('saved', false);
    }

    public function my_teachers()
    {
        return view('teacher.all', [
            'teachers' => auth()->user()->following
        ])->with('saved', true);
    }
}
