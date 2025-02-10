<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function errorPage()
    {
        return view('pages/errorPage');
    }
    
    public function about()
    {
        return view('pages/about');
    }
    
    public function becomeVolunteer()
    {
        return view('pages/becomeVolunteer');
    }
    
    public function faq()
    {
        return view('pages/faq');
    }
    
    public function gallery()
    {
        return view('pages/gallery');
    }
    
    public function galleryCarousel()
    {
        return view('pages/galleryCarousel');
    }
    
    public function volunteer()
    {
        return view('pages/volunteer');
    }
    
    public function volunteerCarousel()
    {
        return view('pages/volunteerCarousel');
    }
    
}
