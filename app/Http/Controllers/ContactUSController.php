<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ContactUS;
use Illuminate\Http\Request;

class ContactUSController extends Controller
{   public function index()
    {
        return view('contact');
   
    }
    public function submit(Request $request)
    {

       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone'=>'required',
            ]);
           
           $contact=new ContactUS();
           $contact->name=$request->name;
           $contact->email=$request->email;
           $contact->message=$request->message;
           $contact->phone=$request->phone;
           $contact->save();
           return redirect()->back()->with('success','Your message has been sent successfully');
           
           

    }



}
