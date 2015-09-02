<?php

namespace Makersblog\Http\Controllers;

use Illuminate\Http\Request;

use Makersblog\Http\Requests;
use Makersblog\Http\Controllers\Controller;
use Makersblog\Http\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Show the form
     * 
     * @return view
     */
    public function showForm()
    {
    	return view('blog.contact');
    }

    /**
     * Email the contact request
     * 
     * @param ContactMeRequest $request
     * @return Redirect
     */
    public function sendContactInfo(ContactMeRequest $request)
    {
    	$data = $request->only('name', 'email');
    	$data['messageLines'] = explode("\n", $request->get('message'));

    	Mail::queue('emails.contact', $data, function ($message) use ($data) {
    		$message->subject('Blog Contact Form: '.$data['name'])
    			->to(config('blog.contact_email'))
    			->replyTo($data['email']);
    	});

    	return back()->withSuccess("Thank you for your message. I will cherish it.");
    }
}
