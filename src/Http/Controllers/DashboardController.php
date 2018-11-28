<?php

namespace OllieFordandCo\Amaranth\Http\Controllers;

use OllieFordandCo\Amaranth\Http\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('amaranth::dashboard.index');
    }
}