<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SalesOrder;
use App\Models\SalesOrderItem;
use App\Models\Item;
use App\Models\ItemHistory;

class SalesOrderItemController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $price = Item::find($request->item_id)->price;

        $data = $request->all();
        $data['total'] = $price * $request->quantity;

        SalesOrderItem::create($data);

        // update total amount in purchase order
        $salesOrderItems = SalesOrderItem::where('sales_order_id', $request->sales_order_id)->get();
        $totalAmount = 0;
        foreach ($salesOrderItems as $item) {
            $totalAmount += $item->total;
        }

        $salesOrder = SalesOrder::find($request->sales_order_id);
        $salesOrder->total_amount = $totalAmount;
        $salesOrder->save();

        return redirect()
            ->route('sales-order.show', $request->sales_order_id)
            ->with('success', 'Item added to sales order');
    }

    /**
     * Display the specified resource.
     */
    public function show(SalesOrderItem $salesOrderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesOrderItem $salesOrderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalesOrderItem $salesOrderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalesOrderItem $salesOrderItem)
    {
        //
    }
}
