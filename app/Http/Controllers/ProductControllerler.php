<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\Request\ProductRequest;
class ProductControllerler extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('dashboard.product.index',compact('products'));
    }

    public function create()
    {
        return view('dashboard.product.add');
        
    }

    public function store(ProductRequest $request)
    {
        Product::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'price'=>$request->price,
          ]);
          return redirect()->back()->with(['sucsess'=>'تم اضافه العرض بنجاح']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::select()->find($id);
        return view('dashboard.product.edit',compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        //check id
        $product = Customer::find($id);
        if(!$product)
        return redirect()->back();
       //update data
       $product ->update($request->all());
       return redirect()->route('products.index');
    }

    public function destroy(Request $request)
    {
        Product::findOrFail($request->id)->delete();
        return redirect()->route('products.index');
    }
}
