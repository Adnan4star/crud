<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customer');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

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
}
