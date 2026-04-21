<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendemail()
    {
        $to = "pramod2pandit@gmail.com";
        $subject = "Trail Email from Laravel SErver";
        $body = "Test Email From my Server";
        Mail::raw($body, function ($message) use ($to, $subject) {
        $message->to($to)->subject($subject);
        });
        
        return "Email Sent Successfully";
    }
}