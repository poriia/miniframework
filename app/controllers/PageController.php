<?php

namespace App\Controllers;

use App\Core\View;

class PageController
{
    public function index()
    {
        $pageTitle = "Home Page";
        
        return View::load('client/home', compact('pageTitle'));
    }
    
    public function contact()
    {
        $pageTitle = "Contact Us";
        
        return View::load('client/contact', compact('pageTitle'));
    }
    
    public function about()
    {
        $pageTitle = "Aboute Us";
        
        return View::load('client/about', compact('pageTitle'));
    }
    
}