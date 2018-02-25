@extends('master')
@section('content')
<div class='container'>
  <div class='p-5 bg-info my-3 text-white'>
    <h3>Add sales</h3>
  </div>
  @include('errors')
  @include('success')
  <form method="post" action="{{ route('sale.store') }}">
    @csrf
    <div class="form-group">
        <label for="product_id">Select a product</label>
        <select name='product_id' class="form-control" id="product_id" >
          @foreach ($products as $product)
            <option value='{{$product->id}}'>{{$product->name}} - stock: {{$product->quantity}}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="form-control">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary">
        add sale
      </button>
    </div>
  </form>
</div>
@endsection

