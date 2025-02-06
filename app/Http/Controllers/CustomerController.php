<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers= Customer::paginate(2);
        return view("pages.customer.index",compact("customers"));
    }


    public function create()
    {
        return view("pages.customer.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|min:3",
            "email"=>"required|email",
            "phone"=>"required|min:11",
            "address"=>"required|min:3"
        ]);
        $customer=new Customer();
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->phone=$request->phone;
        $customer->address=$request->address;

        if($customer->save()){
            return redirect("/customer")->with("success","Customer succesfully created");
        }
    }


    public function show($id)
    {
        $customer=Customer::find($id);
        return view("pages.customer.show",compact("customer"));
    }


    public function edit($id)
    {
        $customer=Customer::find($id);
        return view("pages.customer.update",compact("customer"));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            "name"=>"required|min:3",
            "email"=>"required|email",
            "phone"=>"required|min:11",
            "address"=>"required|min:3"
        ]);
        $customer=Customer::find($id);
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->phone=$request->phone;
        $customer->address=$request->address;

        if($customer->save()){
            return redirect("customer");
        }
    }


    public function destroy($id)
    {
        $customer= Customer::destroy($id);
        if($customer){
            return redirect('customer')->with('success', "Customer has been Deleted");
         } ;
    }
}
