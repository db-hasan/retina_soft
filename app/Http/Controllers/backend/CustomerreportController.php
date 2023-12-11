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
        $indexcustomer = Customerbalance::all();
        return view('backend/customerreport/index', compact('indexcustomer'));
    }
}
