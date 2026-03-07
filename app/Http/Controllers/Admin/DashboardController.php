<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        $serviceCount = Service::count();
        $portfolioCount = Portfolio::count();
        $messageCount = ContactMessage::count();
        
        $recentMessages = ContactMessage::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('serviceCount', 'portfolioCount', 'messageCount', 'recentMessages'));
    }
}
