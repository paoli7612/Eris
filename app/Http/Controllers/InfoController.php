<?php

namespace App\Http\Controllers;

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

        Mail::raw('funzica', function ($message) {
            $message->to(request('email'))
                ->subject('CIao');
        });

        return redirect('/info')
            ->with('message', 'Email sent!');
    }
}
