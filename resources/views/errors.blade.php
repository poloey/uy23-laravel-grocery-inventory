@if (count($errors))
<div class="card bg-danger text-white mb-3">
  <div class="card-body">
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </div>
</div>
@endif