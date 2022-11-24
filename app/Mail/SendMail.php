<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }

    
    public function envelope()
    {
        return new Envelope(
            subject: 'Send Mail',
        );
    }

    
    public function content()
    {
        return new Content(
            view: 'email_templatephp artisan breeze:install',
        );
    }

    
    public function attachments()
    {
        return [];
    }

    public function build(){
        return $this->from("LuizFeMM@outlook.com")->subject("Huu")->view('email_template')->with('data', $this->data);
    }
}
