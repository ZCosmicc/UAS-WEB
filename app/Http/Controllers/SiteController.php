<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site/index');
    }

    public function login(){
        return view('site/login');
    }

    public function register(){
        return view('site/register');
    }

    public function create(){
        return view('site/create');
    }
}
