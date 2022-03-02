<?php

namespace App\Jobs;

use App\Services\AdsService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class DailyMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var AdsService
     */
    protected $adsService;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(AdsService $adsService)
    {
        $this->adsService = $adsService;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailList = $this->adsService->dailyMail();
        $body = $this->adsService->dailyMailBody();
        Mail::to($mailList)->queue(new \App\Mail\DailyMail($body));
    }
}
