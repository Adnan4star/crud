<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $title = "Create Customer";
        $data = compact('url','title');
        return view('customer')->with($data);
    }

    public function store(Request $request)
    {
        p($request->all());
        //insert querys
        $customer = new Customer(); //creating object of customer class
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        $customer->save();

        return redirect('/customer/view');
    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->forceDelete();
        }
        return redirect()->back();
    }

    public function restore($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->restore();
        }
        return redirect('customer/view');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if(is_null($customer)){
            //not found
            return redirect()->back();
        }else{
            //found
            $url = url('/customer/update') . '/' . $id;
            $title = "Update Customer";
            $data = compact('customer', 'url','title');
            return view('customer')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('/customer/view');
    }

    
}
