<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mews\Purifier\Facades\Purifier;

class AboutSettingController extends Controller
{
    public function edit()
    {
        $setting = AboutSetting::firstOrCreate(['id' => 1], [
            'title' => 'About Us',
            'description' => '',
        ]);
        $teamMembers = TeamMember::orderBy('id')->get();

        return view('admin.about.edit', compact('setting', 'teamMembers'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $setting = AboutSetting::firstOrFail();

        if ($request->hasFile('image')) {
            if ($setting->image_path && Storage::disk('public')->exists($setting->image_path)) {
                Storage::disk('public')->delete($setting->image_path);
            }

            $path = $request->file('image')->store('uploads/about', 'public');
            $setting->image_path = $path;
        }

        $setting->title = $validated['title'];
        $setting->description = Purifier::clean($validated['description']);
        $setting->save();

        return back()->with('success', 'About page berhasil diperbarui.');
    }

    public function storeMember(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $data = [
            'name' => $validated['name'],
            'position' => $validated['position'],
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads/team', 'public');
        }

        TeamMember::create($data);

        return back()->with('success', 'Anggota tim berhasil ditambahkan.');
    }

    public function updateMember(Request $request, TeamMember $member)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $member->name = $validated['name'];
        $member->position = $validated['position'];

        if ($request->hasFile('photo')) {
            if ($member->photo && Storage::disk('public')->exists($member->photo)) {
                Storage::disk('public')->delete($member->photo);
            }
            $member->photo = $request->file('photo')->store('uploads/team', 'public');
        }

        $member->save();

        return back()->with('success', 'Anggota tim berhasil diperbarui.');
    }

    public function destroyMember(TeamMember $member)
    {
        if ($member->photo && Storage::disk('public')->exists($member->photo)) {
            Storage::disk('public')->delete($member->photo);
        }

        $member->delete();

        return back()->with('success', 'Anggota tim berhasil dihapus.');
    }
}
