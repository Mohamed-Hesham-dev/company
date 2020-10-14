<?php

namespace App\Http\Controllers;
use App\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function testimonial(Request $request)
    {
        $all_testimonial=Testimonials::all();
        return view('testimonials',compact('all_testimonial'));
        
        
    }
}
