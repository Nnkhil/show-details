<?php

namespace App\Jobs;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Http\Controllers\EmailControler;
use Carbon\Carbon;
use App\Models\Practice; 

use App\Mail\WelcomeEmails;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

 
class SendEmails implements ShouldQueue
{
    use Queueable;
       public $emails;
    /**
     * Create a new job instance.
     */
    public function __construct($emails)
    {
        $this->emails=$emails ;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $emails = Practice::select('email')->get(); 

        $message = "Welcome all users!";
        $subject = "Welcome emails";

        foreach ($emails as $email) {
            Mail::to($email)->send(new WelcomeEmails($message, $subject));
        }
    }
}
