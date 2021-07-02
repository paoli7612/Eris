<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InfoController extends Controller
{
    public function index()
    {
        return view('info');
    }
    
    public function store()
    {
        Request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))
            ->send(new ContactMe());

        return redirect('/info')
            ->with('message', 'Email sent!');
    }
}
