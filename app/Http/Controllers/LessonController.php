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
