<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\TeamMember;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'services' => Service::count(),
            'team_members' => TeamMember::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
