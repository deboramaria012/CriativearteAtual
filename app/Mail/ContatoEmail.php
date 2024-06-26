<?php

namespace App\Mail;

use App\Models\Contato;
use App\Models\salvarEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContatoEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contato;
    public function __construct(ContatoEmail $contato)
    {

      $this->contato = $contato;

    }

    public function build(){
        return $this->from('')
               ->subject('Contato via site')
               ->view('site.email.contato');
    }
  }
//----------------------------
//    SALVAR O EMAIL
//----------------------------


