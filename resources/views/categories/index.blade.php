@extends('layouts.dashboard')

@section('content')

<div class="container">
	<div class="card-deck mb-3 text-center">
	@foreach($data as $category)
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">{{ $category->description}}</h4>
			</div>
			<div class="card-body">
				<h5> Description<small class="text-muted">/ </small></h5>
				<a href="{{ URL::to('categories/' . $category->id) }}">
				<button type="button" class="btn btn-lg btn-block btn-outline-primary">Show posts</button></a>
			</div>
		</div>
	@endforeach
	</div>
</div>
@endsection