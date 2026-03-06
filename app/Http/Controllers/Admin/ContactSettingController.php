<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSetting;
use Illuminate\Http\Request;

class ContactSettingController extends Controller
{
    public function edit()
    {
        $setting = ContactSetting::firstOrCreate(['id' => 1], [
            'title' => 'Get in Touch',
            'description' => '',
            'email' => 'hello@varsaweb.com',
            'phone' => '+1 (555) 123-4567',
        ]);
        $socialLinks = \App\Models\SocialLink::orderBy('sort_order')->get();

        return view('admin.contact.edit', compact('setting', 'socialLinks'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'badge_text' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'operating_hours' => ['nullable', 'string', 'max:255'],
            'badge_1' => ['nullable', 'string', 'max:100'],
            'badge_2' => ['nullable', 'string', 'max:100'],
            'badge_3' => ['nullable', 'string', 'max:100'],
        ]);

        $setting = ContactSetting::firstOrFail();
        $setting->update($validated);

        return back()->with('success', 'Contact page berhasil diperbarui.');
    }

    public function storeSocialLink(Request $request)
    {
        $validated = $request->validate([
            'platform' => ['required', 'string', 'max:50'],
            'url'      => ['required', 'url', 'max:255', 'regex:/^https?:\/\//i'],
        ]);

        $maxOrder = \App\Models\SocialLink::max('sort_order') ?? 0;

        \App\Models\SocialLink::create([
            'platform'   => $validated['platform'],
            'url'        => $validated['url'],
            'sort_order' => $maxOrder + 1,
        ]);

        return back()->with('success', 'Sosial media berhasil ditambahkan.');
    }

    public function updateSocialLink(Request $request, \App\Models\SocialLink $socialLink)
    {
        $validated = $request->validate([
            'platform' => ['required', 'string', 'max:50'],
            'url'      => ['required', 'url', 'max:255', 'regex:/^https?:\/\//i'],
        ]);

        $socialLink->update($validated);

        return back()->with('success', 'Sosial media berhasil diperbarui.');
    }

    public function destroySocialLink(\App\Models\SocialLink $socialLink)
    {
        $socialLink->delete();

        return back()->with('success', 'Sosial media berhasil dihapus.');
    }
}
