<?php

namespace ReactPanel\Contact\HTTP\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use ReactPanel\Contact\HTTP\Models\Contact;
use ReactPanel\Contact\Mail\ContactMailable;

class ContactController extends Controller
{


    public function index()
    {
        return view('Panel::contact');
    }


    public function store(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact.index'));
    }

}
