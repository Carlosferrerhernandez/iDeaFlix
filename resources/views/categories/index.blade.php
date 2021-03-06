@extends('layouts.dashboard')

@section('content')

<div class="col-md-6 offset-md-3">
	<div class="card-deck mb-3 text-center">
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h5 class="my-0 font-weight-normal">Categories iDeaFlix</h5>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="card-deck mb-3 text-center">
	@foreach($data as $category)
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h6 class="my-0 font-weight-normal">{{ $category->description}}</h6>
			</div>
			<div class="card-body">
				<a class="btn btn-sm btn-block btn-outline-primary" href="{{ URL::to('categories/' . $category->id) }}">Show posts</a>
			</div>
		</div>
	@endforeach
	</div>
</div>
@endsection