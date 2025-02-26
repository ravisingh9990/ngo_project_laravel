<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FocusAreasController extends Controller
{
    public function childRights()
    {
        return view('focusAreas/childRights');
    }

    public function socialDevelopment()
    {
        return view('focusAreas/socialDevelopment');
    }
    public function publicHealth()
    {
        return view('focusAreas/publicHealth');
    }
    public function environment()
    {
        return view('focusAreas/environment');
    }
    public function monitoring()
    {
        return view('focusAreas/monitoring');
    }
    
}
