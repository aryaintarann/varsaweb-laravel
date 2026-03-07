<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('category')->latest()->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = PortfolioCategory::all();
        return view('admin.portfolios.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:portfolio_categories,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'description' => 'nullable|string',
            'client_name' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('portfolios', 'public');
        }

        Portfolio::create($validatedData);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = PortfolioCategory::all();
        return view('admin.portfolios.edit', compact('portfolio', 'categories'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:portfolio_categories,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'description' => 'nullable|string',
            'client_name' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            if ($portfolio->image) {
                Storage::disk('public')->delete($portfolio->image);
            }
            $validatedData['image'] = $request->file('image')->store('portfolios', 'public');
        }

        $portfolio->update($validatedData);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }
        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}
