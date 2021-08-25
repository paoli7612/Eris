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
            'lessons' => Lesson::filter()->paginate(12)
        ])->with('new', isset(request()['new']));
    }

    public function show(Lesson $lesson)
    {
        return view('lesson.show', [
            'lesson' => $lesson
        ])->with('add', isset(request()['add']));
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

        return redirect()->route('lesson', $lesson);
    }

    public function edit(Lesson $lesson)
    {
        if (request('s') == 'edit') {
            $lesson->update([
                'title' => request()->validate([
                        'title' => 'required|unique:lessons'
                    ])['title']
            ]);
        } else {
            dd(request('user_id'));
        }
        return redirect()->route('lesson', $lesson);
    }
}
