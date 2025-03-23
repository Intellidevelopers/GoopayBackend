<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $first_name;
    public $otp;

    public function __construct($first_name, $otp)
    {
        $this->first_name = $first_name;
        $this->otp = $otp;
    }

    public function build()
    {
        return $this->subject('Reset Your Password')
                    ->view('emails.forgot_password')
                    ->with([
                        'first_name' => $this->first_name,
                        'otp' => $this->otp
                    ]);
    }
}

