<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;

class YearsController extends Controller
{
    public function index()
    {
        return view('year.index', [
            'years' => Year::all()
        ]);
    }

    public function details($slug)
    {
        return view('year.details', [
            'year' => Year::where('slug', $slug)->first()
        ]);
    }
}
