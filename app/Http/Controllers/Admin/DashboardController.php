<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Initiative;
use App\Models\Service;
use App\Models\Region;
use App\Models\Testimonial;
use App\Models\NewsArticle;
use App\Models\Inquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'sliders' => Slider::count(),
            'initiatives' => Initiative::count(),
            'services' => Service::count(),
            'regions' => Region::count(),
            'testimonials' => Testimonial::count(),
            'news' => NewsArticle::count(),
            'inquiries' => Inquiry::count(),
            'unread_inquiries' => Inquiry::where('is_read', false)->count(),
        ];

        $recentInquiries = Inquiry::latest()->take(5)->get();
        $recentInitiatives = Initiative::latest()->take(4)->get();

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'recentInitiatives'));
    }
}

