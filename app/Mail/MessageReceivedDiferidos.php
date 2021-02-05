<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\TipoIdentificacion;
use App\TipoCredito;
use App\Tematica;
use App\RegistroCreditosDiferidos;

class MessageReceivedDiferidos extends Mailable
{
    use Queueable, SerializesModels;
    public $subject='RECLAMO DIFERIMIENTO DE CRÉDITOS Y PERIODO DE GRACIA';
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
        $this->msg=$msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $identificaciones=TipoIdentificacion::all();
        $creditos=TipoCredito::all();
        $tematicas=Tematica::all();
        $code = RegistroCreditosDiferidos::orderBy('id_reg', 'ASC')->get();
        $coding= $code->last()->codigo;
        return $this->view('web.registro-diferidos.message-received')->with(compact('identificaciones','creditos','tematicas'))->with('coding',$coding);
    }
}
