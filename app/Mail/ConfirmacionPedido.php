<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmacionPedido extends Mailable
{
    use Queueable, SerializesModels;

    public $pedido; 

   
    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){    
        return $this->view(mail.confirmacionCompra);
       
    }
        
        
    }
}
