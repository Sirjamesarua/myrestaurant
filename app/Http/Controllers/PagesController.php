<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index(){
    	return view('welcome');
    }

    public function aboutus(){
    	return view('aboutus');
    }

    public function menu(){
    	return view('menu');
    }

    public function blog(){
    	return view('blog');
    }

    public function contact(){
    	return view('contact');
    }
}
