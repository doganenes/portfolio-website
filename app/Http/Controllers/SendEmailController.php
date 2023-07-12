<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function email()
    {
        return view('contact');
    }

    public function send()
    {
        $email = "laravelprojectt@gmail.com";
        $array = [
            'name' => 'Enes',
            'surname' => 'Doğan',
            'date' => date('Y-m-d')
        ];

        mail::send('emails.email', $array, function ($message) use ($email) {
            $message->subject("Welcome");
            $message->subject($email);
        });
    }
}
