<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request) {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->number = $request->numero;
        $contact->message = $request->message;
        $contact->save();
        return Redirect()->route('home');
    }

    public function showMessages() {
        $messages = Contact::all();
        return view('admin.showMessages', ['messages' => $messages]);
    }
}
