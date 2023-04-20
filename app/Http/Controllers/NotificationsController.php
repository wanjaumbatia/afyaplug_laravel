<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function sms(){
        return view('notifications.sms');
    }

    public function emails(){
        return view('notifications.emails');    
    }
}
