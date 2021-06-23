<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearsController extends Controller
{
    public function index()
    {
        return view('year.index', [
            'years' => Year::all()
        ]);
    }

    public function init()
    {
        Year::create(['id' => 1]);
        Year::create(['id' => 2]);
        Year::create(['id' => 3]);
        return redirect()->back();
    }
}
