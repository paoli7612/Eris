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

    public function details($id)
    {
        $year = Year::find($id);

        if ($year == null) {
            return redirect('home');
        }

        return view('year.details', [
            'year' => $year
        ]);
    }
}
