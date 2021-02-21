<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoSolicitudAlta extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Solicitud de acceso a Plataforma de Descargas de Facturas";
    public $mailUser;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailUser)
    {
        $this->mailUser = $mailUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.CorreoSolicitudAlta');
    }
}