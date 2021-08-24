<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LessonController extends Controller
{
    public function index()
    {
        return view('lesson.index', [
            'lessons' => Lesson::paginate(12)
        ]);
    }

    public function show(Lesson $lesson)
    {
        return view('lesson.show', [
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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:lessons',
            'slug' => 'required|unique:lessons',
            'course_id' => 'required|exists:courses,id'
        ]);

        $lesson = Lesson::create([
            'title' => $request['title'],
            'slug' => $request['slug'],
            'course_id' => $request['course_id'],
            'user_id' => auth()->id()
        ]);

        return redirect(route('lesson', $lesson));
    }

    public function edit(Lesson $lesson)
    {
        $lesson->update([
            'title' => request()->validate([
                'title' => 'required|unique:lessons'
            ])['title']
        ]);

        return redirect(route('lesson', $lesson));
    }
}
