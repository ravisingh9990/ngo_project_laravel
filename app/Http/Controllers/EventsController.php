<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function eventDetails()
    {
        return view('events/eventDetails');
    }
    
    public function events()
    {
        return view('events/events');
    }
    
    public function eventsCarousel()
    {
        return view('events/eventsCarousel');
    }

    
}
