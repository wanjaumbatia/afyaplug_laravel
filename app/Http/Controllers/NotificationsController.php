<?php

namespace App\Http\Controllers;

use App\Models\EmailMessage;
use App\Models\SmsMessage;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function sms()
    {
        $sms = SmsMessage::all();
        return view('notifications.sms', ['sms' => $sms]);
    }

    public function emails()
    {
        $emails = EmailMessage::all();
        return view('notifications.emails', ['emails' => $emails]);
    }
}
