<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServicePageSetting;
use App\Models\WorkProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mews\Purifier\Facades\Purifier;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')->get();
        $pageSetting = ServicePageSetting::first();
        $workProcesses = WorkProcess::orderBy('sort_order')->get();
        $portfolios = Portfolio::orderBy('sort_order')->get();

        return view('admin.services.index', compact('services', 'pageSetting', 'workProcesses', 'portfolios'));
    }

    public function create()
    {
        return view('admin.services.form', ['service' => null]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        Service::create([
            'title'       => $validated['title'],
            'description' => Purifier::clean($validated['description']),
            'sort_order'  => $validated['sort_order'] ?? (Service::max('sort_order') + 1),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service berhasil ditambahkan.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.form', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        $service->update([
            'title'       => $validated['title'],
            'description' => Purifier::clean($validated['description']),
            'sort_order'  => $validated['sort_order'] ?? $service->sort_order,
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service berhasil diperbarui.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service berhasil dihapus.');
    }

    public function updatePageSetting(Request $request)
    {
        $validated = $request->validate([
            'badge_text' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'tag_1' => ['nullable', 'string', 'max:100'],
            'tag_2' => ['nullable', 'string', 'max:100'],
            'tag_3' => ['nullable', 'string', 'max:100'],
            'stat_1_label' => ['nullable', 'string', 'max:100'],
            'stat_1_value' => ['nullable', 'string', 'max:50'],
            'stat_2_label' => ['nullable', 'string', 'max:100'],
            'stat_2_value' => ['nullable', 'string', 'max:50'],
            'approach_text' => ['nullable', 'string'],
        ]);

        $setting = ServicePageSetting::firstOrCreate(['id' => 1]);
        $setting->update([
            'badge_text'    => $validated['badge_text'],
            'title'         => $validated['title'],
            'description'   => Purifier::clean($validated['description']),
            'tag_1'         => $validated['tag_1'] ?? null,
            'tag_2'         => $validated['tag_2'] ?? null,
            'tag_3'         => $validated['tag_3'] ?? null,
            'stat_1_label'  => $validated['stat_1_label'] ?? null,
            'stat_1_value'  => $validated['stat_1_value'] ?? null,
            'stat_2_label'  => $validated['stat_2_label'] ?? null,
            'stat_2_value'  => $validated['stat_2_value'] ?? null,
            'approach_text' => isset($validated['approach_text']) ? Purifier::clean($validated['approach_text']) : null,
        ]);

        return back()->with('success', 'Service page header berhasil diperbarui.');
    }

    public function storeProcess(Request $request)
    {
        $validated = $request->validate([
            'step_label' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        WorkProcess::create([
            'step_label' => $validated['step_label'],
            'title'      => $validated['title'],
            'sort_order' => $validated['sort_order'] ?? (WorkProcess::max('sort_order') + 1),
        ]);

        return back()->with('success', 'Step berhasil ditambahkan.');
    }

    public function updateProcess(Request $request, WorkProcess $process)
    {
        $validated = $request->validate([
            'step_label' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        $process->update([
            'step_label' => $validated['step_label'],
            'title'      => $validated['title'],
            'sort_order' => $validated['sort_order'] ?? $process->sort_order,
        ]);

        return back()->with('success', 'Step berhasil diperbarui.');
    }

    public function destroyProcess(WorkProcess $process)
    {
        $process->delete();

        return back()->with('success', 'Step berhasil dihapus.');
    }

    public function storePortfolio(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:500'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $data = [
            'title'             => $validated['title'],
            'short_description' => $validated['short_description'],
            'description'       => isset($validated['description']) ? Purifier::clean($validated['description']) : '',
            'sort_order'        => Portfolio::max('sort_order') + 1,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/portfolio', 'public');
        }

        Portfolio::create($data);

        return back()->with('success', 'Portfolio berhasil ditambahkan.');
    }

    public function updatePortfolio(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title'             => ['required', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:500'],
            'description'       => ['nullable', 'string'],
            'image'             => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $portfolio->title             = $validated['title'];
        $portfolio->short_description = $validated['short_description'];
        $portfolio->description       = isset($validated['description']) ? Purifier::clean($validated['description']) : '';

        if ($request->hasFile('image')) {
            if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
                Storage::disk('public')->delete($portfolio->image);
            }
            $portfolio->image = $request->file('image')->store('uploads/portfolio', 'public');
        }

        $portfolio->save();

        return back()->with('success', 'Portfolio berhasil diperbarui.');
    }

    public function destroyPortfolio(Portfolio $portfolio)
    {
        if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
            Storage::disk('public')->delete($portfolio->image);
        }

        $portfolio->delete();

        return back()->with('success', 'Portfolio berhasil dihapus.');
    }
}
