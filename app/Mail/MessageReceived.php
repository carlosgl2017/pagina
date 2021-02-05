<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\TipoReclamante;
use App\TipoReclamo;
use App\ExtensionCi;
use App\Reclamo;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $subject='Reclamo';
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
        $extension=ExtensionCi::all();
        $tipo_reclamo=TipoReclamo::all();
        $tipo_reclamante=TipoReclamante::all();
        $code = Reclamo::orderBy('id_reclamo', 'ASC')->get();
        $codig= $code->last()->codigo;
        return $this->view('web.punto_reclamo.message-received')->with(compact('extension','tipo_reclamo','tipo_reclamante'))->with('codig',$codig);
    }
}
