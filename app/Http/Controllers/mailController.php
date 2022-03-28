<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
    {
      $details = [
        'title' => 'Mail from Özgür',
        'body' => 'This is a test.'
      ];
      Mail::to("grknizmir@gmail.com") -> send(new TestMail($details));
      return "Mail gönderildi.";
    }
}
