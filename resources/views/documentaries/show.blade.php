@extends('layouts.home')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
	<div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-normal">{{$documental->name}}</h1>
		<p class="lead font-weight-normal">{{$documental->description}}</p>
		<a class="btn btn-outline-secondary" href="#">Ver trailer</a>
	</div>
	<div class="product-device shadow-sm d-none d-md-block"></div>
	<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-6">
			<h3>Más documentales</h3>
		</div>
		<div class="col-6 text-right">
			<button type="button" class="btn btn-link" style="text-align: left">Ver todos</button>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		@foreach($documentales as $documental)
		<div class="col-md-4">
			<div class="card mb-4 shadow-sm">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">{{$documental->name}}</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a href="{{ url('documentales/' . $documental->id)}}">
								<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
							</a>
						</div>
						<small class="text-muted">9 mins</small>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection