<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LessonController extends Controller
{
    public function show(Lesson $lesson)
    {
        return view('lesson.show', [
            'lesson' => $lesson
        ]);
    }

    public function store()
    {
        $slug = Str::slug(request('title'), '_');

        Lesson::create([
            'title' => request('title'),
            'slug' => $slug,
            'user_id' => auth()->user()->id,
            'course_id' => request('course_id')
        ]);

        return redirect(route('lesson', $slug));
    }
}
