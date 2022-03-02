<?php

namespace App\Services;

use App\Repositories\AdsRepository;
use Carbon\Carbon;

class AdsService
{
    /**
     * @var AdsRepository
     */
    protected $adsRepository;

    public function __construct(AdsRepository $adsRepository)
    {
        $this->adsRepository = $adsRepository;
    }

    public function get_all()
    {
        return $this->adsRepository->gat_all();
    }

    public function dailyMail()
    {
        $tom = Carbon::now()->addDay();
        $next_day_ads = $this->adsRepository->getAdsDay($tom);

        return $next_day_ads;
    }

    public function dailyMailBody()
    {
        return "<p> </p>";
    }
}
