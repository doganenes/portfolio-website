<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        try {
            Mail::to('laraveltestt@gmail.com')->send(new ContactMail($name, $email, $subject, $message));

            $request->session()->flash('message_sent', 'Your message has been sent successfully.');
        } catch (\Exception $e) {
            $request->session()->flash('message_sent', 'An error occurred while sending the message: ' . $e->getMessage());
        }

        return redirect()->back();
    }
}
