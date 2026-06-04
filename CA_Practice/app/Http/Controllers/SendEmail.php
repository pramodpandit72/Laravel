<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    // Show form
    public function showForm()
    {
        return view('upload');
    }

    // Handle upload + email
    public function handleUpload(Request $request)
    {
        // 1. Validation
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'email' => 'required|email'
        ]);

        // 2. Store file
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
        }

        // 3. Send email
        $body = "Your file has been uploaded successfully. File path: " . $path;

        Mail::raw($body, function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('File Upload Confirmation');
        });

        // 4. Response
        return back()->with('success', 'File uploaded and email sent!');
    }
}