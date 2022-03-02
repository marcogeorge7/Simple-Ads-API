<?php

namespace App\Repositories;

use App\Models\Ads;

class AdsRepository
{
    /**
     * @var Ads
     */
    protected $ads;

    public function __construct(Ads $ads)
    {
        $this->ads = $ads;
    }

    public function gat_all()
    {
        return $this->ads->with('tags')->get();
    }

    public function getAdsDay($tom)
    {
        return $this->ads->with('category')->with('tags')->whereDate('start_date', $tom)->get()->pluck('advertiser');
    }
}
