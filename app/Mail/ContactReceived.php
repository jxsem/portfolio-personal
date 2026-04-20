<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    // 1. LA VARIABLE DEBE SER PÚBLICA
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nuevo contacto desde el Portfolio',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact', // Asegúrate de que este archivo existe
        );
    }
}
