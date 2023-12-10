<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Supplierbalance;
use App\Models\type;
use App\Models\Status;
use Session;

class SupplierbalanceController extends Controller
{
    public function index() {
        
        $indexsupplierbalance = Supplierbalance::join('suppliers', 'supplierbalances.sb_name', '=', 'suppliers.supplier_id')
                              ->join('types', 'supplierbalances.sb_type', '=', 'types.type_id')
                              ->get();
        return view('backend/supplierbalance/index', compact('indexsupplierbalance'));
    }

    public function create(){
        $indexData['indexsupplier']= Supplier::all();
        $indexData['indextype']= Type::all();
        return view('backend/supplierbalance/create', $indexData);
    }
    public function store(Request $request){
        $rules = [
            'supplier_name' => 'required|max:50',
            'type_name' => 'required|max:50',
            'sb_amount' => 'required|max:50',
        ];
        $v_msg=[
            'supplier_name.required'=> 'Select supplier name',
            'type_name.required'=> 'Please enter type',
            'sb_amount.required'=> 'Please enter Amount',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= new Supplierbalance();
        $data->sb_name= $request->supplier_name;
        $data->sb_type= $request->type_name;
        $data->sb_amount= $request->sb_amount;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('sb.index');
    }

    public function edit($sb_id=null){
        $indexData['indexData'] = Supplierbalance::find($sb_id);
        $indexData['indexsupplier']= Supplier::all(); 
        $indexData['indextype']= Type::all();       
        return view('backend/supplierbalance/edit', $indexData);
    }
    
    public function update(Request $request, $sb_id){
        $rules = [
            'supplier_name' => 'required|max:50',
            'type_name' => 'required|max:50',
            'sb_amount' => 'required|max:50',
        ];
        $v_msg=[
            'supplier_name.required'=> 'Select supplier name',
            'type_name.required'=> 'Select balance type',
            'sb_amount.required'=> 'Please enter Amount',
        ];
        $this -> validate($request, $rules, $v_msg);

        $data= Supplierbalance::find($sb_id);
        $data->sb_name= $request->supplier_name;
        $data->sb_type= $request->type_name;
        $data->sb_amount= $request->sb_amount;
        $data->save();
        Session::flash('msg','Data submit successfully');
        return redirect()->route('sb.index');
    }

    public function destroy($sb_id=null){
        $destroyData = Supplierbalance::find($sb_id);
        $destroyData->delete();
        Session::flash('msg','Data delete successfully');
        return redirect()->route('sb.index');
    }
}


