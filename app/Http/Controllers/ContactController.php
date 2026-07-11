<?php

namespace App\Http\Controllers;
use App\Models\ContactEnquiry;

use Illuminate\Http\Request;

class ContactController extends Controller
{
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    ContactEnquiry::create([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
        'status' => 'new',
    ]);

    return back()->with('success', 'Message sent successfully.');
}
}
