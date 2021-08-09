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

    public function new_lesson()
    {
        return view('lesson.new');
    }

    public function all()
    {
        return view('lesson.all', [
            'lessons' => Lesson::all()
        ]);
    }

    public function my_lessons()
    {
        return view('lesson.all', [
            'lessons' => Lesson::all()->where('user_id', auth()->user()->id)
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

    public function edit(Lesson $lesson)
    {
        return view('lesson.edit', [
            'lesson' => $lesson
        ]);
    }

    public function remove(Lesson $lesson)
    {
        return view('lesson.remove', [
            'lesson' => $lesson
        ]);
    }

    public function save(Lesson $lesson)
    {
        $lesson->course_id = request('course_id');
        $lesson->description = request('description');
        $lesson->save();

        return redirect(route('lesson', $lesson));
    }

    public function delete(Lesson $lesson)
    {
        $lesson->delete();
        return redirect(route('courses'));
    }
}
