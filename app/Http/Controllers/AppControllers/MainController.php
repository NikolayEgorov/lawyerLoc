<?php

namespace App\Http\Controllers\AppControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index() 
    {
        return view('pages.home');
    }
    
    public function contact() 
    {
        return view('pages.contact');
    }
    
    public function aboutCompany() {
        return view('pages.about_company');
    }
    
    public function services() 
    {
        return view('pages.page');
    }
    
    public function blog() 
    {
        return view('pages.blog');
    }
    
    public function card() 
    {
        return view('pages.brandPage');
    }
}
