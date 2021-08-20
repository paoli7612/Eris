<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return view('lesson.all', [
            'lessons' => Lesson::all()
        ]);
    }

    public function show(Lesson $lesson)
    {
        return view('lesson.show', [
            'lesson' => $lesson
        ]);
    }

    public function settings(Lesson $lesson)
    {
        return view('lesson.settings', [
            'lesson' => $lesson
        ]);
    }

    public function details(Lesson $lesson)
    {
        return view('lesson.details', [
            'lesson' => $lesson
        ]);
    }
}
