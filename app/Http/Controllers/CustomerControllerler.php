<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request\CustomerRequest;
class CustomerControllerler extends Controller
{
   
    public function index()
    {
        $customers = Customer::all();
        return view('dashboard.customer.index',compact('customers'));
    }

    public function create()
    {
        return view('dashboard.customer.add');
    }

    public function store(CustomerRequest $request)
    {
        Customer::create([
            'company'=>$request->company,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=>$request->city,
            'state'=>$request->state,
            'postal'=>$request->postal,
            'country'=>$request->country
          ]);
          return redirect()->back()->with(['sucsess'=>'تم اضافه العرض بنجاح']);
       
    }

    public function edit($id)
    {
        $customer = Customer::select()->find($id);
        return view('dashboard.customer.edit',compact('customer'));
    }

    public function update(CustomerRequest $request, $id)
    {
        //check id
        $customer = Customer::find($id);
        if(!$customer)
        return redirect()->back();
       //update data
       $customer ->update($request->all());
       return redirect()->route('customer.index');
    }

    public function destroy(Request $request)
    {
        Customer::findOrFail($request->id)->delete();
        return redirect()->route('customer.index');
    }
    public function show($id)
    {
        //
    }
}
