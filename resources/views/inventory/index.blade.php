@extends('master')
@section('content')
<div class='container'>
  <div class='p-5 bg-info my-3 text-white'>
    <div class='d-flex justify-content-around align-items-center'>
      <div>
        <img width="200" src='{{ asset('images/vegetable.jpg') }}' alt=''/>
      </div>
      <div>
        <h3>Inventory</h3>
      </div>
    </div>
  </div>
  @include('success')
  <table class='table table-bordered'>
    <tr>
      <th>Item</th>
      <th>Price</th>
      <th>Inventory</th>
      <th>Action</th>
    </tr>
    <tr>
      @foreach ($products as $product)
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->quantity}}</td>
          <td>
            <form action='{{ route('inventory.destroy', ['inventory' => $product->id]) }}' class="d-inline" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Delete item</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tr>
  </table>
  {{$products->links()}}
</div>
@endsection
