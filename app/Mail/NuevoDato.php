<?php

namespace App\Mail;

use App\Model\Datos;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NuevoDato extends Mailable
{
    use Queueable, SerializesModels;

    public $dato;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Datos $dato)
    {
        $this->dato = $dato;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from(config('mail.from.address'))
        ->subject($this->dato->asunto)
        ->markdown('emails.dato.nuevo_dato');
    }
}
