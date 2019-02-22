<?php

//namespace App\Http\Controllers;
namespace Narolafumes\Contact\Http\Controllers;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Narolafumes\Contact\Models\Contact;
use Narolafumes\Contact\Mail\ContactMailable;

use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{
    public function index() {
        return view('contact::contact');
    }
    public function send(Request $request) {
        // echo "<pre>";
        // print_r($request->message); 
        // echo "</pre>";
        // die;
        //Mail::to($request->email)->send(new ContactMailable($request->message,$request->name));
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());        
        return redirect()->route('contact');
    }
}
