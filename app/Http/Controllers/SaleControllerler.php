<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Customer;
use Illuminate\Http\Request\SaleRequest;
class SaleControllerler extends Controller
{

    public function index()
    {
        $sales = Sale::all();
        return view('dashboard.sale.index',compact('sales'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('dashboard.sale.add',compact('customers'));
        
    }

    public function store(SaleRequest $request)
    {
        $data = $request->all();

        $sale = new Sale();
        $sale->customer_id = $data['customer_id'];
        $sale->date = $data['date'];
        $sale->notes = $data['notes'];
        $sale->save();

        foreach ($data['items'] as $itemData) {
            $item = new SaleItem();
            $item->quantity = $itemData['quantity'];
            $item->description = $itemData['description'];
            $item->unit_price = $itemData['unit_price'];
            $item->subtotal = $itemData['subtotal'];
            $sale->items()->save($item);
        }

        return response()->json(['message' => 'Sale saved successfully']);
    
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['error' => 'Sale not found'], 404);
        }
    
        return view('sales.edit', compact('sale'));
    }
    public function update(SaleRequest $request, $id)
    {
        $sale = Sale::find($id);

    if (!$sale) {
        return response()->json(['error' => 'Sale not found'], 404);
    }

    $data = $request->all();
    $sale->customer_id = $data['customer_id'];
    $sale->date = $data['date'];
    $sale->notes = $data['notes'];
    $sale->save();

    return response()->json(['message' => 'Sale updated successfully']);
    }

    public function destroy(Request $request)
    {
        Sale::findOrFail($request->id)->delete();
        return redirect()->route('sale.index');
    }
}
