<?php

namespace App\Jobs;

use App\Mail\RealtorVerificationEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class RealtorVerificationEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->data;

        Mail::send('emails.realtors.verification', $data, static function ($message) use ($data) {
            $message->from('info@rentcircles.com', 'RentCircles');
            $message->to($data['email'], $data['name']);
            $message->replyTo('info@rentcircles.com', 'RentCircles');
            $message->subject('Account verification');
        });
    }
}
