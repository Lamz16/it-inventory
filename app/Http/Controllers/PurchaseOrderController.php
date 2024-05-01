<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PurchaseOrder;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PurchaseOrder::all();

        return view('pages.purchase-order.index', [
            'items' => $items,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $result = PurchaseOrder::create($data);

        return redirect()->route('purchase-order.show', $result->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $purchaseOrder = PurchaseOrder::find($id);

        return view('pages.purchase-order.item.index', [
            'purchaseOrder' => $purchaseOrder,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $purchaseOrder = PurchaseOrder::find($id);

        $purchaseOrder->update($request->all());

        return redirect()
            ->route('purchase-order.show', $purchaseOrder->id)
            ->with('success', 'Successfully updated purchase order.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $purchaseOrder = PurchaseOrder::find($id);
        $purchaseOrder->delete();

        return redirect()->route('purchase-order.index')->with('success', 'Successfully deleted purchase order.');
    }
}
