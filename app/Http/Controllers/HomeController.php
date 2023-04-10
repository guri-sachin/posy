<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ip =  \Request::ip();
        $data['data']['chathistory'] = Chat::where('ip_address',$ip)->orderBy('created_at','DESC')->paginate(10);
        return view('home',$data);
    }
}
