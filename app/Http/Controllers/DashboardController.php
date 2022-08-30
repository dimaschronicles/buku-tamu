<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'title' => 'Dashboard',
            'guests' => Guest::orderBy('date_created_guest', 'desc')->get(),
            'guests_today' => Guest::where('date_created_guest', date('Y-m-d'))->count(),
            'guests_week' => Guest::where('date_created_guest', date('Y-m-d', strtotime('-1 week +1 day')))->count(),
            'guests_month' => Guest::where('date_created_guest', date('Y-m-d', strtotime('-1 months')))->count(),
            'guests_all' => Guest::count(),
        ]);
    }
}
