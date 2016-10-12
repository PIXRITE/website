<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;
use Validator;

use App\Client;
use App\Message;

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
        
        $url = route('contact-page') . '#form';

        if ($validator->fails()) {
            
            return redirect($url)
                ->withErrors($validator)
                ->withInput();
        }
        
        $message = new Message;

        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;

        $message->save();
        
        
        $name = $request->input('name');
        $toEmail = 'sales@pixritedigital.com';
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
        
        return redirect($url)->with('form-thanks', 'Thanks for sending us a message. We\'ll be in touch shortly.');
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
            'details' => 'required'
        ]);
        
        $url = route('hire-page') . '#form';

        if ($validator->fails()) {
            
            return redirect($url)
                ->withErrors($validator)
                ->withInput();
        }
        
        $client = new Client;

        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->details = $request->details;

        $client->budget = $request->budget;
        $client->deadline = $request->deadline;
        $client->hear_about = $request->hearAbout;
        $client->website_prod = $request->website;
        
        $client->save();
        
        
        $name = $request->input('name');
        $toEmail = 'sales@pixritedigital.com';
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
        
        return redirect($url)->with('form-thanks', 'We appreciate your interest in letting us work for you. We\'ll be in touch shortly.');
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
        
        $url = route('testimonials-page') . '#form';

        if ($validator->fails()) {
            
            return redirect($url)
                ->withErrors($validator)
                ->withInput();
        }
        
        $name = $request->input('name');
        $toEmail = 'sales@pixritedigital.com';
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
        
        return redirect($url)->with('form-thanks', 'Thanks for letting us know about your experience.');
    }
}
