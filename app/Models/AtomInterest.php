<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Mail;
//use App\Mail\ContactMail;
use App\Mail\WelcomeMail;

class AtomInterest extends Model
{
    use HasFactory;


    protected $fillable = [
        'investment_category',
        'firstname',
        'secondname',
        'thirdname',
        'email',
        'phone',
        'dob',
        'gender',
        'country',
        'price',
        'note',
        'interest_id',

    ];




}
