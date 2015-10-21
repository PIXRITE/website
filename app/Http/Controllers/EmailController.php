<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class EmailController extends Controller
{
    /**
     * Send hire email.
     *
     * @return \Illuminate\Http\Response
     */
    public function send_hire()
    {
        $email = $user->email;
        $name = $user->first_name . ' ' . $user->last_name;
        $subject = 'New Project Request';


        $data =
        [
            'body' => $input['body'],
            'firstName' => $user->first_name,
        ];

        Mail::send('emails.mass', $data, function($message) use ($email, $name, $subject)
        {
            $message
                ->from('josh@getnovelize.com', 'Novelize Writing App')
                ->to($email, $name)
                ->subject($subject);
        });
        
        return redirect()->back()->with('alert-success', 'The request has been sent!');
    }

    /**
     * Send contact email.
     *
     * @return \Illuminate\Http\Response
     */
    public function send_contact()
    {
        $email = $user->email;
        $name = $user->first_name . ' ' . $user->last_name;
        $subject = 'New Project Request';


        $data =
        [
            'body' => $input['body'],
            'firstName' => $user->first_name,
        ];

        Mail::send('emails.mass', $data, function($message) use ($email, $name, $subject)
        {
            $message
                ->from('josh@getnovelize.com', 'Novelize Writing App')
                ->to($email, $name)
                ->subject($subject);
        });
        
        return redirect()->back()->with('alert-success', 'The request has been sent!');
    }
}
