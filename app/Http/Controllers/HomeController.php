<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->is_admin == '1') {
            return redirect()->route('admin');
        }
        else if (auth()->user()->is_admin == '2') {
            return redirect()->route('user');
        }
        else{
        return redirect()->route('login');
        }

        
    }
}
