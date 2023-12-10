@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('cb.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
   <form method="post" action="{{ route('cb.update', $indexData->cb_id) }}"class="row g-3 p-3">
      @csrf

      <div class="col-12">
        <label for="customer_name" class="form-label">Customer Name<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" name="customer_name">
          <option value="1" selected>Select customer</option>
          @foreach ($indexcustomer as $item)
          <option value="{{$item->customer_id}}" {{ $indexData->cb_name == $item->customer_id ? 'selected' : '' }} >{{$item->customer_name}}</option>
          @endforeach
        </select>
        @error('customer_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6">
        <label for="type_name" class="form-label">Type<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" name="type_name">
          <option value="1" selected>Select type</option>
          @foreach ($indextype as $item)
          <option value="{{$item->type_id}}" {{ $indexData->cb_type == $item->type_id ? 'selected' : '' }}>{{$item->type_name}}</option>
          @endforeach
        </select>
        @error('type_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-6 pb-3">
        <label for="cb_amount" class="form-label">Amount<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="cb_amount" name="cb_amount" value="{{$indexData->cb_amount}}">
        @error('cb_amount')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection