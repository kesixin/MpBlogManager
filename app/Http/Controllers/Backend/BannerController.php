<?php


namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public $banner;

    /**
     * BannerController constructor.
     */
    public function __construct()
    {
        $show = config('mini.show');
        if ($show) {
            $this->BmobObj = new BmobObject("banner");
        }
    }

    public function index()
    {
    }
}