@extends('master')
@section('content')
<div class='container'>
  <div class='p-5 bg-info my-3 text-white'>
    <h3>Sale Report</h3>
  </div>
  @if(count($sales))
  <table class='table table-bordered'>
    <tr>
      <th>Item</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Total</th>
      <th>date</th>
    </tr>
    <tr>
      @foreach ($sales as $sale)
        <tr>
          <td>{{$sale->product->name}}</td>
          <td>{{$sale->quantity}}</td>
          <td>{{$sale->price}}</td>
          <td>{{$sale->total}}</td>
          <td>{{$sale->date}}</td>
        </tr>
      @endforeach
    </tr>
  </table>
  @else 
  <div class='p-5 text-white bg-danger mb-3'>
    <h3>Look Like You don't have sales!</h3>
  </div>
  @endif
</div>
@endsection