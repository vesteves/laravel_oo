<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoEnviado extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // echo "Opa! to aqui dentro";
        // dd($this->data);

        return $this->from('contato@cotiinformatica.com.br', 'Novo Contato')
            ->view('emails.contato')->with([
                "nome" => $this->data["nome"],
                "email" => $this->data["email"],
                "descricao" => $this->data["descricao"],
            ]);
    }
}
