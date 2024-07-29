<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
       return view('frontend.layouts.homepage');
    }
    public function login()
    { 
        return ('frontend.layouts.login');
       }
       
    
    public function register()
    {
        return view('frontend.layouts.register');
    }
}
