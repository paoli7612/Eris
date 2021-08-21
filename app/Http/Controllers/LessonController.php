<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return view('lesson.index', [
            'lessons' => Lesson::paginate(8)
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

    public function search()
    {
        $word = request('u');
        
        if (strlen($word) < 2) {
            return redirect('lessons');
        }

        return view('lesson.index', [
            'lessons' => Lesson::where('title', 'like', "%$word%")->paginate(4)
        ]);
    }
}
