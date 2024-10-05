<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;

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
        $sys = Process::run('uname -srop')->output();
        $upt = Process::run('uptime -p')->output();

        return view('home', [
            'sys' => $sys,
            'upt' => $upt
        ]);
    }
}
