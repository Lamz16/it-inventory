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
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $salesOrderItem = SalesOrderItem::find($id);
        $salesOrderItem->quantity = $request->quantity;
        $salesOrderItem->total = $salesOrderItem->item->price * $request->quantity;
        $salesOrderItem->save();

        // update total amount in purchase order
        $salesOrderItems = SalesOrderItem::where('sales_order_id', $salesOrderItem->sales_order_id)->get();
        $totalAmount = 0;
        foreach ($salesOrderItems as $item) {
            $totalAmount += $item->total;
        }

        $salesOrder = SalesOrder::find($salesOrderItem->sales_order_id);
        $salesOrder->total_amount = $totalAmount;
        $salesOrder->save();

        return redirect()
            ->route('sales-order.show', $salesOrderItem->sales_order_id)
            ->with('success', 'Item updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $salesOrderItem = SalesOrderItem::find($id);
        $salesOrderItem->delete();

        // update total amount in purchase order
        $salesOrderItems = SalesOrderItem::where('sales_order_id', $salesOrderItem->sales_order_id)->get();
        $totalAmount = 0;
        foreach ($salesOrderItems as $item) {
            $totalAmount += $item->total;
        }

        $salesOrder = SalesOrder::find($salesOrderItem->sales_order_id);
        $salesOrder->total_amount = $totalAmount;
        $salesOrder->save();

        return redirect()
            ->route('sales-order.show', $salesOrderItem->sales_order_id)
            ->with('success', 'Item removed from purchase order');
    }
}
