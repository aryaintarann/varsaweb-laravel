<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SiteSettingController extends Controller
{
    public function index()
    {
        // Load all settings and format as key => value pair
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function store(Request $request)
    {
        // Define allowable settings keys based on PRD
        $allowedKeys = [
            'site_name',
            'contact_address',
            'contact_email',
            'contact_phone',
            'contact_map_url',
            'social_facebook',
            'social_instagram',
            'social_linkedin',
            // Note: Logo & Favicon handling would go here. For simplicity based on PRD, keeping it text-based/simple.
        ];

        $data = $request->only($allowedKeys);

        foreach ($data as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->route('admin.settings.index')->with('success', 'Site settings updated successfully.');
    }
}
