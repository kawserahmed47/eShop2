<?php

namespace App\Mail;

   

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
   
    use Queueable, SerializesModels;
    public $details;
    /**
     * Create a new message instance.
     *
     *
     */
    public function __construct($details)
    {
        //
        $this->details= $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // return $this->view('mail.sendMail');
         return $this->subject('Contact Message')
                     ->view('mail.sendMail');
    }
}
