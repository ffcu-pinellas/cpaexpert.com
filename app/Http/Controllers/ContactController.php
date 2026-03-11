<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission; // Added this use statement

class ContactController extends Controller
{
    public function store(Request $request) // Changed \Illuminate\Http\Request to Request due to use statement
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactSubmission::create($validated); // Changed \App\Models\ContactSubmission to ContactSubmission

        return back()->with('success', 'Thank you for your message. We will get back to you shortly.');
    }
}
