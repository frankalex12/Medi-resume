<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class redirectionhopital extends Mailable
{
    use Queueable, SerializesModels;

    public $infos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($infos)
    {
        $this->infos = $infos;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(

            subject: 'Continuer linscription de votre centre',

            from : new Address( 'frankkouekam@gmail.com', 'Med Resume'),



        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(

            view: 'mail.inscris',

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
