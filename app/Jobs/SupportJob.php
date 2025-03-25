<?php

namespace App\Jobs;

use App\Mail\supportEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SupportJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */

    public $name;
    public $email;
    public $message;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('Support@coinxness.com')->send(new supportEmail($this->name, $this->email, $this->message));
    }
}
