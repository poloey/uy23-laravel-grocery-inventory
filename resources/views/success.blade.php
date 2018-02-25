@if (Session::has('message'))
  <div class="card text-white bg-primary mb-3">
    <div class="card-body">
      <h4>{{Session::get('message')}}</h4>
    </div>
  </div>
@endif