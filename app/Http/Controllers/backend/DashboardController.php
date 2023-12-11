<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Customerbalance;
use App\Models\Supplier;
use App\Models\Supplierbalance;
use App\Models\Type;
use App\Models\Status;
use Session;

class DashboardController extends Controller
{
    public function index() {

        $total['indexCustomer']= Customer::count(); 
        $total['indexSupplier']= Supplier::count(); 

        $total['customerIncome']= Customerbalance::where('cb_type',1)->sum('cb_amount');
        $total['customerExpense']= Customerbalance::where('cb_type',2)->sum('cb_amount');
        $total['supplierIncome']= Supplierbalance::where('sb_type',1)->sum('sb_amount');
        $total['supplierExpense']= Supplierbalance::where('sb_type',2)->sum('sb_amount');
        return view('backend/dashboard/dashboard', $total);
    }
    
}
