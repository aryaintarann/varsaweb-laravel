<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SiteSetting;
use App\Models\TeamMember;

class AboutController extends Controller
{
    public function index()
    {
        // Load all settings and format as key => value pair
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        $teamMembers = TeamMember::orderBy('sort_order')->get();
        return view('admin.about.index', compact('settings', 'teamMembers'));
    }

    public function store(Request $request)
    {
        // Allowable text keys for the About page
        $allowedKeys = [
            'about_hero_title',
            'about_hero_subtitle',
            'about_story_title',
            'about_story_text',
            'about_vision_title',
            'about_vision_text',
            'about_mission_title',
            'about_mission_text_1',
            'about_mission_text_2',
            'about_mission_text_3',
        ];

        $data = $request->only($allowedKeys);

        foreach ($data as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->route('admin.about.index')->with('success', 'About page settings updated successfully.');
    }
}
