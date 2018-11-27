<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    function login(){
        return view('layouts.login');
    }

<<<<<<< HEAD
    function index6(){
        return view('layouts.cart');
=======
    function store(){
    return view('layouts.store');
}
    public function buy(){
        $user = Auth::user();
        if(is_null($user)){
            return redirect()->route('login');
        }else {
            return view('layouts.stores.cart');
        }
>>>>>>> 23fd09463e9fb2ca7dcfb5dd91133865df2a2487
    }
}

