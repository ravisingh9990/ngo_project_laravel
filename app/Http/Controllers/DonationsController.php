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
    
    public function educationDonationDetails()
    {
        return view('donations/educationDonationDetails');
    }
    public function environmentDonationDetails()
    {
        return view('donations/environmentDonationDetails');
    }
    public function foodDonationDetails()
    {
        return view('donations/foodDonationDetails');
    }
    public function healthDonationDetails()
    {
        return view('donations/healthDonationDetails');
    }
    public function sustainabilityDonationDetails()
    {
        return view('donations/sustainabilityDonationDetails');
    }
   
    
    public function donationsList()
    {
        return view('donations/donationsList');
    }
    
}
