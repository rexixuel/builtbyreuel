<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    // Controls e-mail message sending

    public function send(Request $messageDetails)
    {
        // $contactMail = new ContactMail($messageDetails);
        
        $messageDetails = $messageDetails->all();

        Mail::to('reuelcabal@gmail.com', 'reuel')->send(new ContactMail($messageDetails));

        return back();
    }
}
