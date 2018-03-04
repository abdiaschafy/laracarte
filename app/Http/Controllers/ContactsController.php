<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function contact(){

    	return view('pages.contact');
    }

    public function valid(ContactRequest $request){


    	$message = Message::create($request->only('name', 'email', 'message'));

    	$mailable = new ContactMessageCreated($message);
    	Mail::to(config('myhouse.admin_support_email'))->send($mailable);

    	Flashy('Nous vous répondrons dans les plus brefs délais');

    	return redirect()->route('home_path');
    }
}
