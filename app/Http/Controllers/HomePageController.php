<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\WebSiteElements;
use App\Traits\CommonFunctions;
use Mews\Captcha\Facades\Captcha;

class HomePageController extends Controller
{
    use CommonFunctions;
    
    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function tour()
    {
        return view('frontend.tour-grid');
    }
    
    public function destination()
    {
        return view('frontend.destination2');
    }
    
    public function gallery()
    {
        return view('frontend.gellery-slider');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    

}
