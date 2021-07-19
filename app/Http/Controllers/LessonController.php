<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function show(Lesson $lesson)
    {
        return view('lesson', ['lesson' => $lesson]);
    }

    public function store()
    {
        $lesson = Lesson::create([
            'user_id' => auth()->user()->id,
            'title' => request('title'),
            'description' => request('description')
        ]);

        $lesson->save();
        return redirect(route('lezione', $lesson));
    }

    public function elimina(Lesson $lesson)
    {
        return view('lesson-delete', ['lesson' => $lesson]);
    }

    public function delete($id)
    {
        Lesson::find($id)->delete();
        return redirect(route('lezioni'));
    }
}
