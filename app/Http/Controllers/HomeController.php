<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function about()
    {
        return view('about');
    }
    function contact()
    {
        return view('contact');
    }
    function services()
    {
        return view('services');
    }
    function products()
    {
        return view('pages.products');
    }
}
