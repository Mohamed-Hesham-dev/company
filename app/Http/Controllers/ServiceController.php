<?php

namespace App\Http\Controllers;
use App\Providers\View;
use Illuminate\Http\Request;
use App\Service;
use App\Features;


class ServiceController extends Controller
{
    public function service(Request $request)
    {
        $all_service=Service::all();
        $all_feature=Features::all();
        
        return view('service',compact('all_service','all_feature'));
        
        
    }
    
    
}
