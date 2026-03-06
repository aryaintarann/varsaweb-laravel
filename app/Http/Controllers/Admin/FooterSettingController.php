<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterSetting;
use Illuminate\Http\Request;

class FooterSettingController extends Controller
{
    public function edit()
    {
        $setting = FooterSetting::firstOrCreate(['id' => 1], [
            'tagline' => '',
            'email' => 'hello@varsaweb.com',
            'phone' => '+1 (555) 123-4567',
        ]);

        $socialLinks = \App\Models\SocialLink::orderBy('sort_order')->get();

        return view('admin.footer.edit', compact('setting', 'socialLinks'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'tagline' => ['required', 'string'],
            'address' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'copyright_text' => ['required', 'string', 'max:255'],
        ]);

        $setting = FooterSetting::firstOrFail();
        $setting->update($validated);

        return back()->with('success', 'Footer berhasil diperbarui.');
    }

    public function storeSocialLink(Request $request)
    {
        $validated = $request->validate([
            'platform'   => ['required', 'string', 'max:50'],
            'url'        => ['required', 'url', 'max:500', 'regex:/^https?:\/\//i'],
        ]);

        $lastOrder = \App\Models\SocialLink::max('sort_order') ?? 0;
        $validated['sort_order'] = $lastOrder + 1;

        \App\Models\SocialLink::create($validated);

        return back()->with('success', 'Link sosial media berhasil ditambahkan.');
    }

    public function updateSocialLink(Request $request, \App\Models\SocialLink $socialLink)
    {
        $validated = $request->validate([
            'platform'   => ['required', 'string', 'max:50'],
            'url'        => ['required', 'url', 'max:500', 'regex:/^https?:\/\//i'],
        ]);

        $socialLink->update($validated);

        return back()->with('success', 'Link sosial media berhasil diperbarui.');
    }

    public function destroySocialLink(\App\Models\SocialLink $socialLink)
    {
        $socialLink->delete();
        return back()->with('success', 'Link sosial media berhasil dihapus.');
    }
}
