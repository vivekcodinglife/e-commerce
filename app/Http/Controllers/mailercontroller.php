<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Support\Facades\Mail;

class mailercontroller extends Controller
{
    //

 public function subscribe(Request $request){
    $email = $request->input('email');

    Mail::send('subscription_confirmation', [], function ($message) use ($email) {
        $message->to($email)->subject('Subscription Confirmation');
    });

    return back()->with('massage'," you are successfully subscribed");

 }
 public function Dis_subscribe(Request $request){
    $email = $request->input('email');

    Mail::send('des_subscribe', [], function($message) use ($email){
       $message->to($email)->subject('Subscription Confirmation');
    });

    return back()->with('massage', "Now you'r able get Discount offer");

 }


}
