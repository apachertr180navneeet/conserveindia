<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Initiative;
use App\Models\Service;
use App\Models\Region;
use App\Models\Testimonial;
use App\Models\NewsArticle;
use App\Models\Inquiry;

class WebsiteController extends Controller
{
    private function getSettings()
    {
        return Setting::all()->pluck('value', 'key');
    }

    public function home()
    {
        $settings = $this->getSettings();
        $sliders = Slider::where('is_active', true)->orderBy('order')->get();
        $initiatives = Initiative::where('is_active', true)->orderBy('order')->get();
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $regions = Region::where('is_active', true)->orderBy('order')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('order')->get();
        $newsArticles = NewsArticle::where('is_active', true)->latest()->take(3)->get();

        return view('website.home', compact('settings', 'sliders', 'initiatives', 'services', 'regions', 'testimonials', 'newsArticles'));
    }

    public function about()
    {
        $settings = $this->getSettings();
        return view('website.about-us', compact('settings'));
    }

    public function services()
    {
        $settings = $this->getSettings();
        $services = Service::where('is_active', true)->orderBy('order')->get();
        return view('website.services', compact('settings', 'services'));
    }

    public function ourWork()
    {
        $settings = $this->getSettings();
        $initiatives = Initiative::where('is_active', true)->orderBy('order')->get();
        return view('website.our-work', compact('settings', 'initiatives'));
    }

    public function capacityBuilding()
    {
        $settings = $this->getSettings();
        return view('website.capacity-building', compact('settings'));
    }

    public function sustainableResearch()
    {
        $settings = $this->getSettings();
        return view('website.sustainable-research-development', compact('settings'));
    }

    public function advocacy()
    {
        $settings = $this->getSettings();
        return view('website.advocacy-and-lobbying', compact('settings'));
    }

    public function sustainableTrade()
    {
        $settings = $this->getSettings();
        return view('website.sustainable-trade', compact('settings'));
    }

    public function covidRelief()
    {
        $settings = $this->getSettings();
        return view('website.covid-relief-project-sahyog', compact('settings'));
    }

    public function latestUpdates()
    {
        $settings = $this->getSettings();
        $newsArticles = NewsArticle::where('is_active', true)->latest()->paginate(9);
        return view('website.latest-updates', compact('settings', 'newsArticles'));
    }

    public function gallery()
    {
        $settings = $this->getSettings();
        return view('website.gallery', compact('settings'));
    }

    public function greenStories()
    {
        $settings = $this->getSettings();
        $newsArticles = NewsArticle::where('is_active', true)->latest()->get();
        return view('website.green-stories', compact('settings', 'newsArticles'));
    }

    public function connectWithUs()
    {
        $settings = $this->getSettings();
        return view('website.connect-with-us', compact('settings'));
    }

    public function contactUs()
    {
        $settings = $this->getSettings();
        return view('website.contact-us', compact('settings'));
    }

    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Inquiry::create($validated);

        return redirect()->back()->with('inquiry_success', 'Thank you! Your message has been received. Our team will get back to you shortly.');
    }
}

