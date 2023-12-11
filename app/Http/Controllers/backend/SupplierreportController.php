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
        $indexsupplier = Supplierbalance::all();
        return view('backend/supplierreport/index', compact('indexsupplier'));
    }
}
