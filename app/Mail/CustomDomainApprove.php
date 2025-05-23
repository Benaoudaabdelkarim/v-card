<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomDomainApprove extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    public function __construct(string $view, string $subject, array $data = [])
    {
        $this->view = $view;
        $this->subject = $subject;
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build(): static
    {
        return $this->subject($this->subject)
            ->markdown($this->view)
            ->with($this->data);
    }
}
