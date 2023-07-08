<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormData;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $formData = new FormData();
        $formData->name = $request->input('name');
        $formData->email = $request->input('email');
        $formData->subject = $request->input('subject');
        $formData->message = $request->input('message');
        $formData->date = now();

        $formData->save();
        $request->session()->flash('message_sent', 'Your message sent correctly.');
        return Redirect::route('contact')->with('message_sent', 'Your message sent correctly.');

    }
}
