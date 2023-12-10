
@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('cb.create') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexcustomerbalance as $itemcustomerbalance)
                <tr>
                    <td>{{$itemcustomerbalance->cb_id}}</td>   
                    <td>{{$itemcustomerbalance->customer_name}}</td> 
                    <td>{{$itemcustomerbalance->type_name}}</td> 
                    <td>{{$itemcustomerbalance->cb_amount}}</td>
                    <td class="icons">
                        <a href="{{ route('cb.edit', $itemcustomerbalance->cb_id) }}" type="button" class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{ route('cb.destroy', $itemcustomerbalance->cb_id) }}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="{{asset('backend/js/jquery-3.7.1.min.js') }} "></script>
<script src="{{asset('backend/js/dataTables.js') }} "></script>
@endsection