<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('pages.landingpage.index', []);
    }

    public function product()
    {
        return view('pages.landingpage.product', []);
    }

    public function productDetail()
    {
        return view('pages.landingpage.product-detail', []);
    }
}
