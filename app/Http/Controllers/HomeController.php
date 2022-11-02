<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.index', [
          'testimonials' => Testimonial::all()
        ]);
    }

    public function about(){
        return view('site.about', [
          'title' => 'About',
          'members' => Member::all()
        ]);
    }
}
