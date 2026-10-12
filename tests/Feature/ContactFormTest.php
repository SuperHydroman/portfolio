<?php

use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportException;

beforeEach(function () {
    config([
        'mail.default' => 'array',
        'mail.from.address' => 'contact@gideonvandenherik.nl',
    ]);
});

test('contact fields are required', function () {
    $this->from('/')
        ->post(route('contact.store'), [])
        ->assertRedirect('/')
        ->assertSessionHasErrors(['name', 'email', 'message']);

    expect(Mail::mailer()->getSymfonyTransport()->messages())
        ->toHaveCount(0);
});

test('a valid submission sends the expected email', function () {
    $this->from('/')
        ->post(route('contact.store'), [
            'name' => 'Test Visitor',
            'email' => 'visitor@example.com',
            'message' => 'I would like to discuss a project.',
        ])
        ->assertRedirect('/')
        ->assertSessionHasNoErrors();

    $messages = Mail::mailer()->getSymfonyTransport()->messages();

    expect($messages)->toHaveCount(1);

    $email = $messages->sole()->getOriginalMessage();

    expect($email->getTo()[0]->getAddress())
        ->toBe('contact@gideonvandenherik.nl');

    expect($email->getReplyTo()[0]->getAddress())
        ->toBe('visitor@example.com');

    expect($email->getTextBody())
        ->toContain('Test Visitor')
        ->toContain('I would like to discuss a project.');
});

test('mail failures display an error', function () {
    Mail::shouldReceive('raw')
        ->once()
        ->andThrow(new TransportException('Simulated mail failure'));

    $this->from('/')
        ->post(route('contact.store'), [
            'name' => 'Test Visitor',
            'email' => 'visitor@example.com',
            'message' => 'Test message.',
        ])
        ->assertRedirect('/')
        ->assertSessionHasErrors('message');
});

test('a fourth submission is blocked by the limiter', function () {
    $data = [
        'name' => 'Test Visitor',
        'email' => 'visitor@example.com',
        'message' => 'Test message.',
    ];

    for ($attempt = 0; $attempt < 3; $attempt++) {
        $this->from('/')
            ->post(route('contact.store'), $data)
            ->assertSessionHasNoErrors();
    }

    $this->from('/')
        ->post(route('contact.store'), $data)
        ->assertRedirect('/')
        ->assertSessionHasErrors([
            'message' => 'Too many attempts. Please wait a minute and try again later.',
        ]);

    expect(Mail::mailer()->getSymfonyTransport()->messages())
        ->toHaveCount(3);
});
