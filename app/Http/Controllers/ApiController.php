<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function follow($id)
    {
        auth()->user()->follow(User::find($id));
    }
}
