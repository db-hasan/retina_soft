<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Supplierbalance;
use App\Models\Type;
use App\Models\Status;
use Session;

class SupplierreportController extends Controller
{
    public function supplier() {
        $suppliers = Supplier::all();
        $suppliers->each(function ($supplier){
            $suppliersIncome = Supplierbalance::where(function($query)use ($supplier){
                $query->where('sb_name', $supplier->supplier_id)
                ->where('sb_type',1);
            })->pluck('sb_amount')->sum();
            $supplier->income = $suppliersIncome;

            $suppliersExpence = Supplierbalance::where(function($query)use ($supplier){
                $query->where('sb_name', $supplier->supplier_id)
                ->where('sb_type',2);
            })->pluck('sb_amount')->sum();
            $supplier->expence = $suppliersExpence;
        });
        return view('backend/supplierreport/index', compact('suppliers'));
    }
}
