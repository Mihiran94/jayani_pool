<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        return view('layouts.index');
    }

    function index1(){
        return view('layouts.project');
    }

    function index2(){
        return view('layouts.services');
    }

    function index3(){
        return view('layouts.blog');
    }

    function index4(){
        return view('layouts.about');
    }

    function index5(){
        return view('layouts.contact');
    }
}
