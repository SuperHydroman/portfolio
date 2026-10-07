<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:254',
            'message' => 'required|string|max:1000',
        ]);

        $body = "Name: {$validated['name']}\n"
            ."Email: {$validated['email']}\n\n"
            .$validated['message'];

        try {
            Mail::raw($body, function (Message $mail) use ($validated) {
                $mail->to(config('mail.from.address'))
                    ->subject('Contact Form Submission')
                    ->replyTo(
                        $validated['email'],
                        $validated['name']
                    );
            });
        } catch (TransportExceptionInterface $exception) {
            report($exception);

            return back()->withErrors([
                'message' => 'Failed to send message. Please try again later.',
            ]);
        }

        return back();
    }
}
