@extends('master')
@section('content')
<div class='container'>
  <div class='p-5 bg-info my-3 text-white'>
    <h3>Inventory</h3>
  </div>
  <table class='table table-bordered'>
    <tr>
      <th>Item</th>
      <th>Price</th>
      <th>Inventory</th>
    </tr>
    <tr>
      @foreach ($products as $product)
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->quantity}}</td>
        </tr>
      @endforeach
    </tr>
  </table>
</div>
@endsection