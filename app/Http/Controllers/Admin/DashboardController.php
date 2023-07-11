<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $portfolio = Portfolio::all();
        return view('admin.dashboard', compact('portfolio'));
    }
}
