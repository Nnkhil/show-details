<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UserEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Models\Practice; 
use App\Jobs\SendEmails;

class EmailController extends Controller
{
   public function send_email(){
    $tomail="nikhi@gmail.com";
    $message="hello nikhil";
    $subject="welcome";
     $req= Mail::to($tomail)->send(new UserEmail($message,$subject));
    dd($req);
}
public function multiple_emails(){
    $emails= Practice::all();
    // dd($emails);
    SendEmails::dispatch($emails);
    echo "send email successfully";
}
}
