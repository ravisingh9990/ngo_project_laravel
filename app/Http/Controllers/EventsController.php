<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function eventDetails()
    {
        return view('events/eventDetails');
    }
    
    public function empoweringYouth()
    {
        return view('events/empoweringYouth');
    }
    public function publicHealthNutrition()
    {
        return view('events/publicHealthNutrition');
    }
    public function sustainableLiving()
    {
        return view('events/sustainableLiving');
    }
    public function childRightsEducation()
    {
        return view('events/childRightsEducation');
    }
    public function inclusiveEmployment()
    {
        return view('events/inclusiveEmployment');
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
