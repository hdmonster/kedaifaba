<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Testimonial;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->paginate(3);
        
        return view('site.index', [
          'testimonials' => Testimonial::all(),
          'products' => $products
        ]);
    }

    public function about(){
        return view('site.about', [
          'title' => 'About',
          'members' => Member::all()
        ]);
    }
}
