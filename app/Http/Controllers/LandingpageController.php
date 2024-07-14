<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('pages.landingpage.index', []);
    }

    public function product()
    {
        $items = Item::all();

        return view('pages.landingpage.product', [
            'items' => $items,
        ]);
    }

    public function productDetail($id)
    {
        $item = Item::find($id);

        return view('pages.landingpage.product-detail', [
            'item' => $item,
        ]);
    }
}
