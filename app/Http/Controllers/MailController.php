<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function SendMail(){
        

        Mail::send('emails.reminder', ['user' => "data"], function ($m)  {
            $m->from('_mainaccount@studytable.net', 'Your Application');

            $m->to('mohaldarda@gmail.com','Saumitro')->subject('Your Reminder!');
        });
    }
}
