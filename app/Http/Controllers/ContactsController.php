<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function contact(){

    	return view('pages.contact');
    }

    public function valid(ContactRequest $request){

    	$mailable = new ContactMessageCreated($request->name, $request->email, $request->message);
    	Mail::to('abdiaschafang@gmail.com')->send($mailable);

    	return 'Done';
    }
}
