<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function contact(){

    	return view('pages.contact');
    }

    public function valid(ContactRequest $request){
    }
}
