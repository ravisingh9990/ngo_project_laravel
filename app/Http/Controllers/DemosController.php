<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemosController extends Controller
{
    public function index()
    {
        return view('demos/index');
    }
    
    public function indexOnePage()
    {
        return view('demos/indexOnePage');
    }
    public function indexDark()
    {
        return view('demos/indexDark');
    }
    public function indexBoxed()
    {
        return view('demos/indexBoxed');
    }
    public function indexRtl()
    {
        return view('demos/indexRtl');
    }
    public function index2()
    {
        return view('demos/index2');
    }
    public function index2OnePage()
    {
        return view('demos/index2OnePage');
    }
    public function index2Dark()
    {
        return view('demos/index2Dark');
    }
    public function index3()
    {
        return view('demos/index3');
    }
    public function index3OnePage()
    {
        return view('demos/index3OnePage');
    }
    public function index3Dark()
    {
        return view('demos/index3Dark');
    }
    public function index4()
    {
        return view('demos/index4');
    }
    public function index4OnePage()
    {
        return view('demos/index4OnePage');
    }
    public function index4Dark()
    {
        return view('demos/index4Dark');
    }
    public function index5()
    {
        return view('demos/index5');
    }
    public function index5OnePage()
    {
        return view('demos/index5OnePage');
    }
    public function index5Dark()
    {
        return view('demos/index5Dark');
    }

}
