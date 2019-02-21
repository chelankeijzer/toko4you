@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Product
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('orders.store') }}">


        <div class="form-group">
              @csrf
              <label for="userId">UserId:</label>
              <input type="integer" class="form-control" name="userId"/>
          </div>





          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
