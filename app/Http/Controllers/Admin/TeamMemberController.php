<?php

namespace App\Http\Controllers\Admin;

use App\Models\TeamMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('sort_order')->get();
        return view('admin.about.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.team_members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sort_order' => 'nullable|integer'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team_members', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        TeamMember::create($validated);

        return redirect()->route('admin.about.index')->with('success', 'Team member added successfully.');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team_members.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sort_order' => 'nullable|integer'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($teamMember->image && Storage::disk('public')->exists($teamMember->image)) {
                Storage::disk('public')->delete($teamMember->image);
            }
            $imagePath = $request->file('image')->store('team_members', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['sort_order'] = $validated['sort_order'] ?? $teamMember->sort_order;

        $teamMember->update($validated);

        return redirect()->route('admin.about.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(TeamMember $teamMember)
    {
        if ($teamMember->image && Storage::disk('public')->exists($teamMember->image)) {
            Storage::disk('public')->delete($teamMember->image);
        }
        
        $teamMember->delete();

        return redirect()->route('admin.about.index')->with('success', 'Team member deleted successfully.');
    }
}
