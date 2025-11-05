<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\FormModel;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $form;

    public function __construct(FormModel $form)
    {
        $this->form = $form;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Registrasi Cloud Computing 2025 Berhasil!',
            from: new Address(config('mail.from.address'), config('mail.from.name'))
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.test',  
            with: [
                'full_name'     => $this->form->full_name,
                'student_email' => $this->form->student_email,
                'birthdate'     => $this->form->birthdate,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}