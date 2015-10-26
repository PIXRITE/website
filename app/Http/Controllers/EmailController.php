<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;
use Validator;

class EmailController extends Controller
{ 

    /**
     * Send contact email.
     *
     * @return \Illuminate\Http\Response
     */
    public function send_contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $name = $request->input('name');
        $toEmail = 'hello@pixrite.com';
        $fromEmail = $request->input('email');
        $subject = 'New Contact Message';


        $data =
        [
            'name' => $name,
            'email' => $fromEmail,
            'phone' => $request->input('phone'),
            'body' => $request->input('message'),
        ];

        Mail::send('emails.contact', $data, function($message) use ($toEmail, $fromEmail, $name, $subject)
        {
            $message
                ->from($fromEmail, $name)
                ->to($toEmail, 'PIXRITE')
                ->subject($subject);
        });
        
        return back()->with('flash-success', 'Your message has been sent!');
    }
    
    /**
     * Send hire email.
     *
     * @return \Illuminate\Http\Response
     */
    public function send_hire(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'details' => 'required',
            'website' => 'url'
        ]);

        if ($validator->fails()) {
            
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $name = $request->input('name');
        $toEmail = 'hello@pixrite.com';
        $fromEmail = $request->input('email');
        $subject = 'New Project Request';


        $data =
        [
            'name' => $name,
            'email' => $fromEmail,
            'phone' => $request->input('phone'),
            'body' => $request->input('details'),
            'budget' => $request->input('budget', 'none given'),
            'deadline' => $request->input('deadline', 'none given'),
            'website' => $request->input('website', 'none given'),
            'hearAbout' => $request->input('hearAbout', 'none given'),
        ];

        Mail::send('emails.hire', $data, function($message) use ($toEmail, $fromEmail, $name, $subject)
        {
            $message
                ->from($fromEmail, $name)
                ->to($toEmail, 'PIXRITE')
                ->subject($subject);
        });
        
        return redirect()->back()->with('flash-success', 'The request has been sent!');
    }
    

    /**
     * Send testimonials email.
     *
     * @return \Illuminate\Http\Response
     */
    public function send_testimonials(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'experience' => 'required',
        ]);

        if ($validator->fails()) {
            
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $name = $request->input('name');
        $toEmail = 'hello@pixrite.com';
        $fromEmail = $request->input('email');
        $subject = 'New Testimonial';


        $data =
        [
            'name' => $name,
            'email' => $fromEmail,
            'title' => $request->input('title'),
            'company' => $request->input('company'),
            'body' => $request->input('experience'),
        ];

        Mail::send('emails.testimonial', $data, function($message) use ($toEmail, $fromEmail, $name, $subject)
        {
            $message
                ->from($fromEmail, $name)
                ->to($toEmail, 'PIXRITE')
                ->subject($subject);
        });
        
        return back()->with('flash-success', 'Your testimonial has been sent!');
    }
}
