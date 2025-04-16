<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}


// In app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Logic here: Save to DB, send email, etc.
        // For example, send an email or store in database

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
