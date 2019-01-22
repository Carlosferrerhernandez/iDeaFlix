@extends('layouts.dashboard')

@section('content')

<div class="container">
	<div class="card-deck mb-3 text-center">
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">Free</h4>
			</div>
			<div class="card-body">
				<div class="container">
					<div class="card-deck mb-3 text-center">
					@foreach($posts as $post)
						<div class="card mb-4 shadow-sm">
							<div class="card-header">
								<h4 class="my-0 font-weight-normal">{{ $post->name}}</h4>
							</div>
							<div class="card-body">
								<h5> Description<small class="text-muted">/ </small></h5>
								<a href="#">
								<button type="button" class="btn btn-lg btn-block btn-outline-primary">Show posts</button></a>
							</div>
						</div>
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection