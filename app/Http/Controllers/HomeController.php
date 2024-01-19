<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use App\Http\Traits\BusinessSettingTrait;

class HomeController extends Controller
{
    use BusinessSettingTrait;
    public function index()
    {
        SEOMeta::setRobots('index, follow');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setType('website');
        SEOTools::setTitle('Car Dekho BD');
        SEOTools::setDescription('FOR THE PEOPLE, BY THE PEOPLE, WE ARE HERE FOR YOU!!!');
        SEOMeta::addKeyword('SohiBD');
        SEOTools::opengraph()->setUrl(url('/'));

        $business_setting = $this->getSetting();

        // return view("frontend.welcome");
        return view("frontend.layouts.app", compact('business_setting'));
    }
    public function main()
    {
        SEOMeta::setRobots('index, follow');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setType('website');
        SEOTools::setTitle('Car Dekho BD');
        SEOTools::setDescription('FOR THE PEOPLE, BY THE PEOPLE, WE ARE HERE FOR YOU!!!');
        SEOMeta::addKeyword('SohiBD');
        SEOTools::opengraph()->setUrl(url('/'));

        return view("frontend.index");
    }

    public function aboutUs()
    {
        return view("frontend.pages.about_us");
    }
}
