@extends('master')
@section('content')
<div class='container'>
  <div class='p-5 bg-info my-3 text-white'>
    <h3>Add Inventory</h3>
  </div>
  <form action="{{ route('inventory.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="form-control">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary">
        add product to inventory
      </button>
    </div>
  </form>
</div>
@endsection