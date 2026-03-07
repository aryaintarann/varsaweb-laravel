<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
use Illuminate\Support\Str;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::withCount('portfolios')->latest()->paginate(10);
        return view('admin.portfolio-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.portfolio-categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:portfolio_categories,name',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['name']);
        
        PortfolioCategory::create($validatedData);

        return redirect()->route('admin.portfolio-categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(PortfolioCategory $portfolioCategory)
    {
        return view('admin.portfolio-categories.edit', compact('portfolioCategory'));
    }

    public function update(Request $request, PortfolioCategory $portfolioCategory)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:portfolio_categories,name,' . $portfolioCategory->id,
        ]);

        $validatedData['slug'] = Str::slug($validatedData['name']);
        
        $portfolioCategory->update($validatedData);

        return redirect()->route('admin.portfolio-categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(PortfolioCategory $portfolioCategory)
    {
        if ($portfolioCategory->portfolios()->count() > 0) {
            return redirect()->route('admin.portfolio-categories.index')->with('error', 'Cannot delete category that has portfolios.');
        }
        
        $portfolioCategory->delete();

        return redirect()->route('admin.portfolio-categories.index')->with('success', 'Category deleted successfully.');
    }
}
