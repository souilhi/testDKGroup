<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Event;

use App\Events\SendMail;
use App\Mail\emailNotification;

class ContactController extends Controller
{
    //
    public function index()

    {

    	Event::dispatch(new SendMail(1));

    	dd('hi');

    }

    public function contactForm(){
        return view('welcome');
    }
    public function store(Request $request){
       
        //return $request->input();
        $request->validate([
            'sujet'     => 'required|min:5',
            'email'    => 'required|email',
            'description' => 'required|min:25',
        ]);
       // Contact::create($request->all()); 

       $contactData = new Contact([
           'sujet'=>$request->get('sujet'),
           'email'=>$request->get('email'),
           'description'=>$request->get('description')
       ]);
       $contactData->save();
        
       Event::dispatch(new SendMail('alisouilhi25@gmail.com'));

    	//dd('hi email sent to : olivia.declerck@dkgroup.fr');
        return new emailNotification();
        
    }
}
