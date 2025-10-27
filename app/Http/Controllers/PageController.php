<?php

namespace App\Http\Controllers;
use Illuminate\Htpp\Request;

class PageController extends Controller {
    public function Home(){
        return view ('home');
    }
    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}