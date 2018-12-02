<?php

namespace OllieFordandCo\Amaranth\Http\Controllers;

use OllieFordandCo\Amaranth\Http\Controller;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Illuminate\Http\Request;
use App\User;

class InstallController extends Controller
{

    protected $editor;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(\DotenvEditor $editor)
    {
        $this->middleware('install');
        $this->editor = $editor;
    }

    public function update(Request $request)
    {
        $inputs = $request->except(['page', '_method']);
        foreach($inputs as $key => $value) {
            DotenvEditor::setKey($key, $value);
        }
        DotenvEditor::save();
        return redirect('install?page=environment');
    }

    public function store()
    {
        return redirect('install?page=getting-started');
    }

    public function admin(Request $request) {
        User::create(array(
            'email'         => $request->input('email'),
            'password'      => \Hash::make($request->input('password'))
        ));

        return redirect('install?page=database');
    }

    public function migrate() {
        $exitCode = \Artisan::call('migrate:refresh', [
            '--force' => true,
        ]);
        return redirect('install?page=database');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('amaranth::install.init');
    }
}