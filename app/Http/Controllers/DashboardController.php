<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $start = date('m/d/Y', strtotime('first day of this month'));
        $end = date('m/d/Y', strtotime('last day of this month'));

        return view('pages.dashboard.index', [
            'range' => $start . ' - ' . $end,
        ]);
    }
}
