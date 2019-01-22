@extends('layouts.dashboard')

@section('content')

<div class="py-5 text-center">
  <img class="d-block mx-auto mb-4" src="{{ asset('img/logo/Logo1.png')}}" alt="" width="72" height="">
  <h2>Create a category</h2>
  <p class="lead">Enter the necessary data to create a category</p>
</div>

<div class="row">
  <div class="col-md-12">
    <h4 class="mb-3">Name</h4>
    <form class="needs-validation" role="form" method="POST" action="{{ route('categories.store') }}">

      {{ csrf_field() }}

      <div class="row">
        <div class="col-md-12 mb-3">
          <input type="text" class="form-control" name="description" id="description" placeholder="" value="" required>
        </div>
      </div>
      <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
    </form>
  </div>
</div>

@endsection