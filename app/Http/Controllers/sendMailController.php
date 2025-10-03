<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMailController extends Controller
{
    public function index(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $data_mail = [
            'sender_name' => $name,
            'sender_email' => $email,
            'subject' => $subject,
            'message' => $message
        ];
        Mail::to("info88714@gmail.com")->send(new sendMail($data_mail,$headers));

        return redirect()->to(url('/contact'))->with('success', 'Email has been sent successfully!');
    }
}
