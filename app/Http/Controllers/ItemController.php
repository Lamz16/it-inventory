<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\ItemHistory;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();

        return view('pages.item.index', [
            'items' => $items,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function show($id)
    {
        $item = Item::find($id);
        $histories = ItemHistory::where('item_id', $id)->orderBy('created_at', 'asc')->get();

        return view('pages.item.show', [
            'item' => $item,
            'histories' => $histories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['stock'] = 0;

        Item::create($data);

        return redirect()->route('item.index')->with('success', 'Successfully added item');
    }
}
