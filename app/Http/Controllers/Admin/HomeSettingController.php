<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSettingController extends Controller
{
    public function edit()
    {
        $setting = HomeSetting::firstOrCreate(['id' => 1], [
            'hero_title' => 'Weaving the Web of Tomorrow',
            'hero_description' => '',
        ]);

        return view('admin.home.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'hero_title' => ['required', 'string', 'max:255'],
            'hero_description' => ['required', 'string'],
            'hero_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $setting = HomeSetting::firstOrFail();

        if ($request->hasFile('hero_image')) {
            if ($setting->hero_image_url && Storage::disk('public')->exists($setting->hero_image_url)) {
                Storage::disk('public')->delete($setting->hero_image_url);
            }

            $path = $request->file('hero_image')->store('uploads/home', 'public');
            $setting->hero_image_url = $path;
        }

        $setting->hero_title = $validated['hero_title'];
        $setting->hero_description = $validated['hero_description'];
        $setting->save();

        return back()->with('success', 'Home page berhasil diperbarui.');
    }
}
