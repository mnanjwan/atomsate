<?php

namespace App\Http\Controllers;
use App\Mail\AttachmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use Mail;

class EmailsController extends Controller
{
    public function email() {
        // define the logic of your email

       // Mail::to('mnanjwan@gmail.com')->send(new AttachmentMail());
    }
}
