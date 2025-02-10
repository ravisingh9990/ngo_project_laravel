<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationsController extends Controller
{
    public function donateNow()
    {
        return view('donations/donateNow');
    }
    
    public function donation()
    {
        return view('donations/donation');
    }
    
    public function donationCarousel()
    {
        return view('donations/donationCarousel');
    }
    
    public function donationDetails()
    {
        return view('donations/donationDetails');
    }
    
    public function donationsList()
    {
        return view('donations/donationsList');
    }
    
}
