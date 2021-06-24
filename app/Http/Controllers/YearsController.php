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
        Year::create(['id' => 1, 'title' => 'Primo anno']);
        Year::create(['id' => 2, 'title' => 'Secondo anno']);
        Year::create(['id' => 3, 'title' => 'Terzo anno']);
        return redirect()->back();
    }

    public function details(Year $year)
    {
        return view('year.details', [
            'year' => $year
        ]);
    }
}
