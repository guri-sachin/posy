<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Subscription extends Controller
{
    public function index()
    {
        return view('subscriptions.subscription');
    }
}
