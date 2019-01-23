@extends('layouts.dashboard')

@section('content')

<div class="py-5 text-center">
	<img class="d-block mx-auto mb-4" src="{{ asset('img/logo/Logo1.png')}}" alt="" width="72" height="">
	<h2>User information</h2>
	<p class="lead">Enter the necessary data to create a post</p>
</div>

<div class="row">
	<div class="col-md-12">
		<form class="needs-validation" role="form" method="POST" action="{{ route('posts.store') }}">

			{{ csrf_field() }}

			<div class="col-md-8 offset-md-2">
				<div class="mb-3">
					<h6 for="name">Name</h6>
					<p>{{$user->name}}</p>
				</div>

				<div class="mb-3">
					<h6 for="email">Email</h6>
					<p>{{$user->email}}</p>
				</div>
				

				<div class="mb-3" style="margin-top: 10px;">
					<h6 for="url">Registration date</h6>
					<p>{{$user->created_at}}</p>
				</div>

				<hr class="mb-4">
				<button class="btn btn-danger btn-lg btn-block" style="margin-bottom: 20px;" type="submit">Show favorites</button>
			</div>
		</form>
	</div>
</div>

@endsection