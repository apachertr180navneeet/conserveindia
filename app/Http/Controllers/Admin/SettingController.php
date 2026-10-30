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
        ];

        foreach ($keys as $key) {
            Setting::set($key, $request->input($key, ''));
        }

        // Handle Footprint Map Image Upload
        if ($request->hasFile('footprint_map_image')) {
            $file = $request->file('footprint_map_image');
            $filename = 'map_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('website/assets/images'), $filename);
            Setting::set('footprint_map_image', 'assets/images/' . $filename);
        }

        return redirect()->back()->with('success', 'Site settings updated successfully!');
    }
}

