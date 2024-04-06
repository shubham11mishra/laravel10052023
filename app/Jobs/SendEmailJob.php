<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginUserNotification;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $loginUser;

    /**
     * Create a new job instance.
     */
    public function __construct($loginUser)
    {
        $this->loginUser = $loginUser;
    }
   
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //

        Mail::to($this->loginUser->email)->send(new LoginUserNotification($this->loginUser));
        
    }
}
