<?php

namespace App\Http\Controllers;
use App\Providers\View;
use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
    public function about(Request $request)
    {
       /* $all_about=About::all();
        return view('about',compact('all_about'));*/
        
        
    }
}
