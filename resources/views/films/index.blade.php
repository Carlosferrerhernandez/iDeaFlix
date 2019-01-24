@extends('layouts.home')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" >
	<div class="col-md-5 p-lg-5 mx-auto my-5 text-left">
		<h1 class="display-4 font-weight-normal">Peliculas</h1>
		<p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quis odio optio! Accusamus, reprehenderit enim? Libero reprehenderit aspernatur blanditiis, ad accusantium odio ullam non repudiandae debitis ab atque, provident repellat.</p>
	</div>
	<div class="product-device shadow-sm d-none d-md-block"></div>
	<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="container-fluid" style="margin-top: 100px;">
	<div class="row offset-9" style="margin-bottom:30px;">
		<form class="form-inline mt-2 mt-md-0 text-left">
			<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
	<div class="row">
		@foreach($peliculas as $pelicula)
		<div class="col-md-4">
			<div class="card mb-4 shadow-sm">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">{{$pelicula->name}}</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a href="{{ url('peliculas/' . $pelicula->id)}}">
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