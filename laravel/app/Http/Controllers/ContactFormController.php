<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;



class ContactFormController  extends Controller
{

    private Mailer $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    public function __invoke(Request $request) {
        $this->mailer->send(
        'emails.test', [
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject'),
            'content'=>$request->input('content') 
            ],

         function(Message $message) use ($request){
            $message->to('dana@maria.dm');
            $message->subject($request->input('subject'));
        }); 
        return redirect('/contact');
    }

    
}
