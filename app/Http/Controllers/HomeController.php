<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function about(){
        return view('site.about', [
          'title' => 'About'
        ]);
    }
}
