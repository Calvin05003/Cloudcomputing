<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Models\FormModel;

class MailController extends Controller
{

    public function sendEmail(Request $request)
    {
        Mail::to($request->email)->send(new TestMail($request));
        return redirect('/');
    }
}
