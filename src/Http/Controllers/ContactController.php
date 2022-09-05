<?php

namespace Gourav\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Gourav\Contact\Mail\ContactMailable;
use Gourav\Contact\Models\Contact;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {

        Contact::create($request->all());
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        return redirect('contact')->with('success','We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed below to talk to one of our staff members. Otherwise, we will reply by email as soon as possible.  Talk to you soon.');
    }
}
