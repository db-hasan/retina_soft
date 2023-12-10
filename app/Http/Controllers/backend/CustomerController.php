<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Status;
use Session;

class CustomerController extends Controller
{
    public function index() {
        $indexcustomer = Customer::join('statuses', 'customers.customer_status', '=', 'statuses.id')->get();
        return view('backend/customer/index', compact('indexcustomer'));
    }

    public function create(){
        return view('backend/customer/create');
    }
    public function store(Request $request){
        $rules = [
            'customer_name' => 'required | max:50',
            'customer_phone' => 'required | max:50',
            'customer_address' => 'required | max:50',
        ];
        $v_msg=[
            'customer_name.required'=> 'Please enter name',
            'customer_phone.required'=> 'Please enter phone',
            'customer_address.required'=> 'Please enter address',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Customer();
        $data->customer_name= $request->customer_name;
        $data->customer_phone= $request->customer_phone;
        $data->customer_address= $request->customer_address;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('customer.index');
    }

    public function edit($customer_id=null){
        $indexData['indexData'] = Customer::find($customer_id);
        $indexData['indexStatus']= Status::all();      
        return view('backend/customer/edit', $indexData);
    }
    
    public function update(Request $request, $customer_id){
        $rules = [
            'customer_name' => 'required | max:50',
            'customer_phone' => 'required | max:50',
            'customer_address' => 'required | max:50',
        ];
        $v_msg=[
            'customer_name.required'=> 'Please enter name',
            'customer_phone.required'=> 'Please enter phone',
            'customer_address.required'=> 'Please enter address',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Customer::find($customer_id);
        $data->customer_name= $request->customer_name;
        $data->customer_phone= $request->customer_phone;
        $data->customer_address= $request->customer_address;
        $data->customer_status= $request->status;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('customer.index');
    }

    public function show($customer_id=null){
        $showData = customer::join('statuses', 'customers.customer_status', '=', 'statuses.id')->find($customer_id);
        return view('backend/customer/show', compact('showData'));
    }

    public function destroy($customer_id=null){
        $destroyData = Customer::find($customer_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('customer.index');
    }
}

