<?php

namespace App\Http\Controllers\Fonted;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Consultent;
use App\Models\Footer;
use App\Models\Message;
use App\Models\Personal;
use App\Models\Review;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class Fontendcontroller extends Controller
{
    //
    public function index()
    {
        
        $sliders = Slider::where('isActive', '1')->limit(1)->get();
        $abouts = About::limit(1)->get();
        //   $webservices = Service::where('isActive', '1')->where('project_name', 'web_design')->limit(6)->get();
        
        //  $webservices = Service::where('isActive', '1')->limit(6)->get();
        //   $webservices = Service::where('isActive', '1')->limit(7)->get();
          $laravelservices = Service::where('isActive', '1')->where('project_name', 'laravel_project')->limit(6)->get();
        // return $laravelservices;
         $feedbacks = Review::all();
        // $massages = Message::limit()->get();
        

        return view('index', compact('sliders', 'abouts', 'feedbacks',  'laravelservices'
    ));
    }

    public function about()
    {
        $Personals = Personal::limit(1)->get();
        $feedbacks = Review::all();
        return view('fontend.about.about', compact('Personals', 'feedbacks'));
    }
    public function service()
    {
        return view('fontend.service.service');
    }
    public function protfolio()
    {
        $laravelservices = Service::where('isActive', '1')->where('project_name', 'laravel_project')->limit(6)->get();
        return view('fontend.protfolio.protfolio', compact('laravelservices'));
    }

    public function contact()
    {
        $footers = Footer::limit(1)->get();
        return view('fontend.contact.contact', compact('footers'));
    }
    public function protfolio_details(){
         $consultents = Consultent::limit(1)->get();
        return view('fontend.protfolio_details.protfolio_details', compact('consultents'));
    }
}