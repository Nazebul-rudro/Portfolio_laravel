<?php

namespace App\Http\Controllers\Fonted;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Footer;
use App\Models\Message;
use App\Models\Review;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class Fontendcontroller extends Controller
{
    //
    public function index()
    {
        
        $sliders = Slider::where('isActive', '1')->limit(1)->get();
        //  $abouts = About::where('isActive', '1')->limit(1)->get();
        // $services = Service::limit()->get();
        // $feedbacks = Review::limit()->get();
        // $massages = Message::limit()->get();
        // $footers = Footer::limit()->get();

        return view('index', compact('sliders', ));
    }
}
