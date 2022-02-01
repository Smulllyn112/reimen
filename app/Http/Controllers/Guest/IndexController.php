<?php

namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

    	return view('guest.index');
    }

    public function about(){

        return view('guest.about.index');
    }

    public function badoging(){

        return view('guest.badoging.index');
    }

    public function roof_covering(){

        return view('guest.roof_covering.index');
    }

    public function szigeteles(){

        return view('guest.szigeteles.index');
    }

    

    

    public function thanks(){

        return view('guest.thanks.index');
    }





}
