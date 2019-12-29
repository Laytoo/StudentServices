<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('front.home');
    }

    public function aboutus(){

        return view('front.about');
    }
    public function contact(){

        return view('front.contact');
    }

    public function university(){

        return view('front.university');
    }

    public function universitydetail(){

        return view('front.universitydetail');
    }

    public function scholarship(){

        return view('front.scholarship');
    }

    public function scholarshipdetail(){

        return view('front.scholarshipdetail');
    }
}
