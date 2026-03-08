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
        $request->validate([
            'site_name'       => 'nullable|string|max:255',
            'contact_address' => 'nullable|string|max:500',
            'contact_email'   => 'nullable|email|max:255',
            'contact_phone'   => 'nullable|string|max:30',
            'contact_map_url' => 'nullable|url|max:1000',
            'social_facebook' => 'nullable|url|max:500',
            'social_instagram'=> 'nullable|url|max:500',
            'social_linkedin' => 'nullable|url|max:500',
        ]);

        $allowedKeys = [
            'site_name',
            'contact_address',
            'contact_email',
            'contact_phone',
            'contact_map_url',
            'social_facebook',
            'social_instagram',
            'social_linkedin',
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
