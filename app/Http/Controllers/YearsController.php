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
        $year = Year::where('slug', $slug)->first();

        if ($year == null) {
            return redirect('home');
        }

        return view('year.details', [
            'year' => $year
        ]);
    }

    public function init()
    {
        Year::create(1, 'Primo anno');
        Year::create(2, 'Secondo anno');
        Year::create(3, 'Terzo anno');
        return redirect('years');
    }
}
