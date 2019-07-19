<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ConfirmacionPedido extends Mailable
{
    use Queueable, SerializesModels;

    public $requestCarritoCompra;
    public $requestUsuario;
    

        
    public function __construct(Request $requestCarritoCompra, Request $requestUsuario)
    {
        $this->requestCarritoCompra = $requestCarritoCompra;
        $this->requestUsuario = $requestUsuario;
        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.confirmacionCompra');
    }
}
