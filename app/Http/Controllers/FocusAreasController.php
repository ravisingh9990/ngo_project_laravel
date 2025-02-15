<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FocusAreasController extends Controller
{
    public function childRights()
    {
        return view('FocusAreas/childRights');
    }

    public function socialDevelopment()
    {
        return view('FocusAreas/socialDevelopment');
    }
    public function publicHealth()
    {
        return view('FocusAreas/publicHealth');
    }
    public function environment()
    {
        return view('FocusAreas/environment');
    }
    public function monitoring()
    {
        return view('FocusAreas/monitoring');
    }
    
}
