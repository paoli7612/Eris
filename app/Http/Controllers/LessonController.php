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

    public function new()
    {
        return view('lesson.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:lessons'
        ]);

        $lesson = Lesson::create([
            'title' => $request['title'],
            'slug' => Str::slug($request['title'], '-'),
            'course_id' => $request['course_id'],
            'user_id' => auth()->id()
        ]);

        return redirect(route('lesson', $lesson));
    }
}
