<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        
        return view('contact');
        
    }
    public function insert_contact()
    {
        $var=request()->all();

        $add=new Contact;
        $add->name=$var['name'];
        $add->email=$var['email'];
        $add->subject=$var['subject'];
        $add->message=$var['message'];
        $add->save();
        
        return back();
        //return back();
    }
}
