<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OTPMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $first_name;

    public function __construct($first_name, $otp) 
    {
        $this->first_name = $first_name;
        $this->otp = $otp;
    }

    public function build()
    {
        return $this->subject('Your OTP Code')
                    ->view('emails.otp')
                    ->with([
                        'first_name' => $this->first_name,
                        'otp' => $this->otp
                    ]);
    }
}

