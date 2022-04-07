<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {

        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->department = $data['department'];
        $this->position = $data['position'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')->subject('Temporary Password for DISCUSS.ION')->with('name', $this->name)->with('password', $this->password);

    }
}
