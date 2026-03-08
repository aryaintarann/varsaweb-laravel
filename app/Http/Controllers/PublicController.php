<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\ContactMessage;
use App\Models\SiteSetting;

class PublicController extends Controller
{
    public function index()
    {
        $services = Service::latest()->take(3)->get();
        $portfolios = Portfolio::with('category')->latest()->take(6)->get();
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        $projectCount = Portfolio::count();
        $clientCount = Portfolio::whereNotNull('client_name')->distinct('client_name')->count('client_name');
        return view('public.home', compact('services', 'portfolios', 'settings', 'projectCount', 'clientCount'));
    }

    public function about()
    {
        $teamMembers = \App\Models\TeamMember::orderBy('sort_order')->get();
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        return view('public.about', compact('settings', 'teamMembers'));
    }

    public function services()
    {
        $services = Service::latest()->paginate(9);
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        return view('public.services', compact('services', 'settings'));
    }

    public function portfolios(Request $request)
    {
        $categories = PortfolioCategory::all();
        $query = Portfolio::with('category')->latest();
        
        if ($request->has('category') && $request->category != '') {
            $query->where('category_id', $request->category);
        }
        
        $portfolios = $query->paginate(12);
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        return view('public.portfolios', compact('portfolios', 'categories', 'settings'));
    }

    public function portfolioDetail(Portfolio $portfolio)
    {
        // Load related category relationship since we'll likely display it
        $portfolio->load('category');
        
        // Load related projects (from same category, excluding current) as 'more works'
        $relatedProjects = Portfolio::where('category_id', $portfolio->category_id)
            ->where('id', '!=', $portfolio->id)
            ->latest()
            ->take(3)
            ->get();
            
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        return view('public.portfolio-detail', compact('portfolio', 'relatedProjects', 'settings'));
    }

    public function contact()
    {
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        return view('public.contact', compact('settings'));
    }

    public function submitContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        ContactMessage::create($validatedData);

        return redirect()->route('contact')->with('success', 'Thank you for contacting us. We will get back to you shortly.');
    }
}
