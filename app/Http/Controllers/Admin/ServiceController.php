<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'short_description' => 'required|string',
            'full_description' => 'nullable|string',
        ]);

        if ($request->hasFile('icon')) {
            $validatedData['icon'] = $request->file('icon')->store('services', 'public');
        }

        Service::create($validatedData);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'short_description' => 'required|string',
            'full_description' => 'nullable|string',
        ]);

        if ($request->hasFile('icon')) {
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }
            $validatedData['icon'] = $request->file('icon')->store('services', 'public');
        }

        $service->update($validatedData);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->icon) {
            Storage::disk('public')->delete($service->icon);
        }
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
