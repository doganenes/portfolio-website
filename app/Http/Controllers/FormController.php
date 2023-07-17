<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormData;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $formData = new FormData();
        $formData->name = $request->input('name');
        $formData->email = $request->input('email');
        $formData->subject = $request->input('subject');
        $formData->message = $request->input('message');
        $formData->date = Carbon::now('Europe/Istanbul');
        $formData->save();

        return redirect('/')->with('message_sent', 'Your message sent successfully.');
    }
}
