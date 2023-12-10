<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Customerbalance;
use App\Models\Type;
use App\Models\Status;
use Session;

class CustomerbalanceController extends Controller
{
    public function index() {
        
        $indexcustomerbalance = Customerbalance::join('customers', 'customerbalances.cb_name', '=', 'customers.customer_id')
                              ->join('types', 'customerbalances.cb_type', '=', 'types.type_id')
                              ->get();
        return view('backend/customerbalance/index', compact('indexcustomerbalance'));
    }

    public function create(){
        $indexData['indexcustomer']= Customer::all();
        $indexData['indextype']= Type::all();
        return view('backend/customerbalance/create', $indexData);
    }
    public function store(Request $request){
        $rules = [
            'customer_name' => 'required|max:50',
            'type_name' => 'required|max:50',
            'cb_amount' => 'required|max:50',
        ];
        $v_msg=[
            'customer_name.required'=> 'Select customer name',
            'type_name.required'=> 'Please enter type',
            'cb_amount.required'=> 'Please enter Amount',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Customerbalance();
        $data->cb_name= $request->customer_name;
        $data->cb_type= $request->type_name;
        $data->cb_amount= $request->cb_amount;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('cb.index');
    }

    public function edit($cb_id=null){
        $indexData['indexData'] = Customerbalance::find($cb_id);
        $indexData['indexcustomer']= Customer::all(); 
        $indexData['indextype']= Type::all();       
        return view('backend/customerbalance/edit', $indexData);
    }
    
    public function update(Request $request, $cb_id){
        $rules = [
            'customer_name' => 'required|max:50',
            'type_name' => 'required|max:50',
            'cb_amount' => 'required|max:50',
        ];
        $v_msg=[
            'customer_name.required'=> 'Select customer name',
            'type_name.required'=> 'Please enter type',
            'cb_amount.required'=> 'Please enter Amount',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Customerbalance::find($cb_id);
        $data->cb_name= $request->customer_name;
        $data->cb_type= $request->type_name;
        $data->cb_amount= $request->cb_amount;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('cb.index');
    }

    public function destroy($cb_id=null){
        $destroyData = Customerbalance::find($cb_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('cb.index');
    }
}
