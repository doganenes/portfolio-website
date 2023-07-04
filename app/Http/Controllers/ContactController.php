<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Exception;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];
        try {
            Mail::to('enesdogandigital@gmail.com')->send(new ContactMail($details));

        } catch (\Exception $e) {
            dd($e);
        }
        return back()->with('message_sent()', 'Your message has been sent successfully!');
    }
}
