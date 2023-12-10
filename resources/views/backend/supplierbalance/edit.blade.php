@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('sb.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
   <form method="post" action="{{ route('sb.update', $indexData->sb_id) }}"class="row g-3 p-3">
      @csrf

      <div class="col-12">
        <label for="supplier_name" class="form-label">supplier Name<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" name="supplier_name">
          <option value="1" selected>Select supplier</option>
          @foreach ($indexsupplier as $item)
          <option value="{{$item->supplier_id}}" {{ $indexData->sb_name == $item->supplier_id ? 'selected' : '' }} >{{$item->supplier_name}}</option>
          @endforeach
        </select>
        @error('supplier_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6">
        <label for="type_name" class="form-label">Type<span class="text-danger">*</span></label>
        <select class="form-select" aria-label="Default select example" name="type_name">
          <option value="1" selected>Select type</option>
          @foreach ($indextype as $item)
          <option value="{{$item->type_id}}" {{ $indexData->sb_type == $item->type_id ? 'selected' : '' }}>{{$item->type_name}}</option>
          @endforeach
        </select>
        @error('type_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-6 pb-3">
        <label for="sb_amount" class="form-label">Amount<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="sb_amount" name="sb_amount" value="{{$indexData->sb_amount}}">
        @error('sb_amount')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection