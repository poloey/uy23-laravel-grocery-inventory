@extends('master')
@section('content')
<div class='container'>
  <div class='p-5 bg-info my-3 text-white'>
    <h3>Sale Report</h3>
  </div>
  @include('success')
  @if(count($sales))
  <table class='table table-bordered'>
    <tr>
      <th>Item</th>
      <th>Quantity</th>
      <th>Unit Price</th>
      <th>Total</th>
      <th>date</th>
      <th>Action</th>
    </tr>
    <tr>
      @foreach ($sales as $sale)
        <tr>
          <td>{{$sale->product->name}}</td>
          <td>{{$sale->quantity}}</td>
          <td>{{$sale->price}}</td>
          <td>{{$sale->total}}</td>
          <td>{{$sale->date}}</td>
          <td>
            <form action='{{ route('sale.destroy', ['sale' => $sale->id]) }}' class="d-inline" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Delete item</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tr>
  </table>
  {{$sales->links()}}
  @else 
  <div class='p-5 text-white bg-danger mb-3'>
    <h3>Look Like You don't have sales!</h3>
  </div>
  @endif
</div>
@endsection
