<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\About;
use App\Models\Mitra;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Customer;
use App\Models\Legality;
use App\Models\Services;
use App\Models\WeServices;
use App\Models\HomeService;
use App\Models\VisionMision;
use Illuminate\Http\Request;
use App\Models\HomepageAbout;
use App\Models\AdvantageService;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index(Request $request)
    {
        $about = About::all();
        $contact = Contact::first();
        $heroes = Hero::all();
        $features = Feature::all();
        $home_about = HomepageAbout::first();
        $homeservice = HomeService::first();
        $mitras = Mitra::all();
        $customers = Customer::all();
        return view('layouts.homepage.index', compact('about','contact', 'heroes', 'features', 'home_about', 'homeservice', 'mitras', 'customers'));
    }

    public function homepageabout(Request $request)
    {
        $about = About::first();
        $legality = Legality::first();
        $vision_mision = VisionMision::first();
        return view('pages.homepage.about', compact('about', 'legality', 'vision_mision'));
    }

    public function homepageservices( Request $request)
    {  
        $services = Services::all();
        $advantages = AdvantageService::all();
        $our_services = WeServices::all();
        $homeserivice = HomeService::all();
        return view('pages.homepage.service', compact('services', 'advantages', 'our_services'));
    }

    public function homepagegallery()
    {
        $galleries = Gallery::all();
        return view('pages.homepage.gallery',compact('galleries'));
    }

    public function homepagecontact(Request $request)
    {
        $contact = Contact::first();
        return view('pages.homepage.contact', compact('contact'));
    }
}
