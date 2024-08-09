<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class WelcomeController extends Controller
{
    public function index()
    {
        // Puoi passare dati alla vista qui
        $message = Message::first();
        return view('welcome', ['message' => $message]);
    }
}
