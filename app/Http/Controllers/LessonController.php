<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function val($request)
    {
        return $request->validate([
            'title' => 'required|unique:lessons|max:255'
        ]);
    }

    public function show(Lesson $lesson)
    {
        return view('lesson', ['lesson' => $lesson]);
    }

    public function store(Request $request)
    {
        $this->val($request);

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

    public function modifica(Lesson $lesson)
    {
        return view('lesson-edit', [
            'lesson' => $lesson
        ]);
    }

    public function edit(Lesson $lesson)
    {
        $lesson->description = request('description');
        $lesson->save();
        return redirect($lesson->route);
    }
}
