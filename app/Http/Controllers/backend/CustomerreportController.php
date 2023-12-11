<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Customerbalance;
use App\Models\Type;
use App\Models\Status;
use Session;

class CustomerreportController extends Controller
{
    public function customer() {
        $customers = Customer::all();
        $customers->each(function ($customer){
            $customersIncome = Customerbalance::where(function($query)use ($customer){
                $query->where('cb_name', $customer->customer_id)
                ->where('cb_type',1);
            })->pluck('cb_amount')->sum();
            $customer->income = $customersIncome;

            $customersExpence = Customerbalance::where(function($query)use ($customer){
                $query->where('cb_name', $customer->customer_id)
                ->where('cb_type',2);
            })->pluck('cb_amount')->sum();
            $customer->expence = $customersExpence;
        });
        return view('backend/customerreport/index', compact('customers'));
    }
}
