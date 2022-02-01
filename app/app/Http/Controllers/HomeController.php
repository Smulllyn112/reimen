<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Console\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dd("jaj");
        //return view('home');
    }
    public function instructions()
    {
        return view('admin.instructions.index');
    }

    public function konfig(){
        return view('test');
        /*Artisan::call('key:generate');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');*/
    }
}
