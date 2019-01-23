@extends('layouts.dashboard')

@section('content')

<div class="py-5 text-center">
	<img class="d-block mx-auto mb-4" src="{{ asset('img/logo/Logo1.png')}}" alt="" width="72" height="">
	<h2>Create a post</h2>
	<p class="lead">Enter the necessary data to create a post</p>
</div>

<div class="row">
	<div class="col-md-12">
		<form class="needs-validation" role="form" method="POST" action="{{ route('posts.store') }}">

			{{ csrf_field() }}

			<div class="col-md-8 offset-md-2">
				<div class="mb-3">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" id="name">
				</div>

				<div class="mb-3">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" id="description" cols="7" rows="10"></textarea>
				</div>

				<div class="mb-3">
					<label for="year">Year</label>
					<input type="text" class="form-control" name="year" id="year">
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<label for="category_id">Category</label>
						<select class="custom-select d-block w-100" id="category_id" name="category_id" required>
							<option value="" selected="select" disabled="">Select</option>
							@foreach($categories as $category)
								<option value="{{$category->id}}">
									{{$category->description}}
								</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="row" style="margin-top: 10px;">
					<div class="col-md-12">
						<label for="gender">Gender</label>
						<select class="custom-select d-block w-100" id="gender" name="gender" required>
							<option value="" selected="select" disabled="">Select</option>
							<option value="Accion">Acción</option>
							<option value="Infantil">Infantil</option>
							<option value="Comedia">Comedia</option>
							<option value="Ciencia ficcion">Ciencia ficcion</option>
							<option value="Aventura">Aventura</option>
							<option value="Suspenso">Suspenso</option>
							<option value="Romance">Romance</option>
							<option value="Fantasia">Fantasia</option>
							<option value="Drama">Drama</option>
							<option value="Animacion">Animacion</option>
							<option value="Crimen">Crimen</option>
							<option value="Misterio">Misterio</option>
						</select>
					</div>
				</div>

				<div class="mb-3" style="margin-top: 10px;">
					<label for="url">URL <span class="text-muted">(Trailer)</span></label>
					<input type="text" class="form-control" id="url" name="url" placeholder="Url - Youtube">
				</div>

				<hr class="mb-4">
				<button class="btn btn-primary btn-lg btn-block" style="margin-bottom: 20px;" type="submit">Save</button>
			</div>
		</form>
	</div>
</div>

@endsection