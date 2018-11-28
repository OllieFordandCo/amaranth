<?php

namespace OllieFordandCo\Amaranth\Http\Controllers;

use OllieFordandCo\Amaranth\Http\Controller;

class AuthController extends Controller
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
    public function postLogin()
    {
        return view('amaranth::auth.login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('amaranth::auth.login');
    }
}