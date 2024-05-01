<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PurchaseOrder;
use App\Models\PurchaseOrderItem;
use App\Models\Item;

class PurchaseOrderItemController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $price = Item::find($request->item_id)->price;

        $data = $request->all();
        $data['total'] = $price * $request->quantity;

        PurchaseOrderItem::create($data);

        // update total amount in purchase order
        $purchaseOrderItems = PurchaseOrderItem::where('purchase_order_id', $request->purchase_order_id)->get();
        $totalAmount = 0;
        foreach ($purchaseOrderItems as $item) {
            $totalAmount += $item->total;
        }

        $purchaseOrder = PurchaseOrder::find($request->purchase_order_id);
        $purchaseOrder->total_amount = $totalAmount;
        $purchaseOrder->save();

        return redirect()
            ->route('purchase-order.show', $request->purchase_order_id)
            ->with('success', 'Item added to purchase order');
    }

    /**
     * Display the specified resource.
     */
    public function show(PurchaseOrderItem $purchaseOrderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PurchaseOrderItem $purchaseOrderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PurchaseOrderItem $purchaseOrderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseOrderItem $purchaseOrderItem)
    {
        //
    }
}
