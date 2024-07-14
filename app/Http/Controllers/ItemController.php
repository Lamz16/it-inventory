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
        $list_pcs = ['pcs', 'box', 'pack', 'set', 'dozen', 'meter', 'liter', 'gram', 'kilogram', 'ton', 'other'];
        $items = Item::all();

        return view('pages.item.index', [
            'list_pcs' => $list_pcs,

            'items' => $items,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function show($id)
    {
        $item = Item::find($id);
        $histories = ItemHistory::where('item_id', $id)->orderBy('created_at', 'desc')->get();

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

        if ($request->hasFile('thumbnail')) {
            $thumbnail_name = time() . '.' . $request->file('thumbnail')->extension();
            $uploaded_thumbnail = $request->file('thumbnail')->move(public_path('images'), $thumbnail_name);
            $thumbnail = 'images/' . $thumbnail_name;
            $data['thumbnail'] = $thumbnail;
        }

        Item::create($data);

        return redirect()->route('item.index')->with('success', 'Successfully added item');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Item::find($id);

        if ($request->hasFile('thumbnail')) {
            // Define the upload path
            $uploadPath = public_path('images');

            // Check if the directory exists, if not, create it
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Generate a unique name for the thumbnail
            $thumbnail_name = time() . '.' . $request->file('thumbnail')->extension();
            // Move the uploaded file to the public/images directory
            $uploaded_thumbnail = $request->file('thumbnail')->move($uploadPath, $thumbnail_name);
            // Set the thumbnail path to be saved in the database
            $data['thumbnail'] = 'images/' . $thumbnail_name;
        }

        // Update the item with the new data
        $item->update($data);

        // Redirect back to the item index page with a success message
        return redirect()->route('item.index')->with('success', 'Successfully updated item');
    }
}
