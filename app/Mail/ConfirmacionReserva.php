<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ConfirmacionReserva extends Mailable
{
    use Queueable, SerializesModels;

    public $requestData;

    public function __construct(Request $request)
    {
        $this->requestData=$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.confirmacionReserva');
    }
}
