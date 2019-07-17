<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class confirmacionPedido extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){    
       
        return $this->from('noresponder.places@pedidosYa.com', 'PedidosYa')
            ->subject('Confirmacion de pedido')
            ->markdown('mail.confirmacionPedido')
            ->with([
                'userName' => $this->requestData->session()->get('usuario_nombre').' '.$this->requestData->session()->get('usuario_apellido_paterno'),
                'pedido' => $this->requestData->session()->get('pedido'),
            ]);
    }
        
        
    }
}
