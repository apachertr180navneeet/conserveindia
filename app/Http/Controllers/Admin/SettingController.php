<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $keys = [
            'site_title',
            'contact_email',
            'contact_phone',
            'contact_address',
            'facebook_url',
            'instagram_url',
            'linkedin_url',
            'youtube_url',
            'about_intro_lead',
            'impact_plastic_tons',
            'impact_ragpickers',
            'impact_women_trained',
            'impact_retail_partners',
        ];

        foreach ($keys as $key) {
            Setting::set($key, $request->input($key, ''));
        }

        return redirect()->back()->with('success', 'Site settings updated successfully!');
    }
}

