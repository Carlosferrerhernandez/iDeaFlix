@extends('layouts.dashboard')

@section('content')

<div class="py-5 text-center">
	<img class="d-block mx-auto mb-4" src="{{ asset('img/logo/Logo1.png')}}" alt="" width="72" height="">
	<h2>Edit a post</h2>
	<p class="lead">Enter the necessary data to edit a post</p>
</div>

<div class="row">
	<div class="col-md-12">
		<form class="needs-validation" method="POST" id="edit_post" action="{{ route('posts.update', $post->id)}}" role="form">
			
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PUT">

			<div class="col-md-8 offset-md-2">
				<div class="mb-3">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" id="name" value="{{$post->name}}">
				</div>

				<div class="mb-3">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" id="description" cols="7" rows="10" required="">{{$post->description}}</textarea>
				</div>

				<div class="mb-3" style="margin-top: 10px;">
					<label for="year">Year</label>
					<input type="text" class="form-control" id="year" name="year" placeholder="" value="{{$post->year}}">
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<label for="category_id">Category</label>
						<select class="custom-select d-block w-100" id="category_id" value="{{$post->category_id}}" name="category_id" required>
							@if($post->category_id == "1")
							<option value="1" selected="">Film</option>
							<option value="2">Documentaries</option>
							<option value="3">Series</option>
							@elseif($post->category_id == "2")
							<option value="2" selected="">Documentaries</option>
							<option value="1">Film</option>
							<option value="3">Series</option>
							@elseif($post->category_id == "3")
							<option value="3" selected="">Series</option>
							<option value="1">Film</option>
							<option value="2">Documentaries</option>
							@endif
						</select>
					</div>
				</div>

				<div class="row" style="margin-top: 10px;">
					<div class="col-md-12">
						<label for="gender">Gender</label>
						<select class="custom-select d-block w-100" id="gender" name="gender" value="{{$post->gender}}" required>
							@if($post->gender == "Accion")
								<option value="Accion" selected="">Acción</option>
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
							@elseif($post->gender == "Infantil")
								<option value="Infantil" selected="">Infantil</option>
								<option value="Comedia">Comedia</option>
								<option value="Accion">Acción</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Aventura">Aventura</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Romance">Romance</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Drama">Drama</option>
								<option value="Animacion">Animacion</option>
								<option value="Crimen">Crimen</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Comedia")
								<option value="Comedia" selected="">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Aventura">Aventura</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Romance">Romance</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Drama">Drama</option>
								<option value="Animacion">Animacion</option>
								<option value="Crimen">Crimen</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Ciencia ficcion")
								<option value="Ciencia ficcion" selected="">Ciencia ficcion</option>
								<option value="Comedia">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
								<option value="Aventura">Aventura</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Romance">Romance</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Drama">Drama</option>
								<option value="Animacion">Animacion</option>
								<option value="Crimen">Crimen</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Aventura")
								<option value="Aventura" selected="">Aventura</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Comedia">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Romance">Romance</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Drama">Drama</option>
								<option value="Animacion">Animacion</option>
								<option value="Crimen">Crimen</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Suspenso")
								<option value="Suspenso" selected="">Suspenso</option>
								<option value="Aventura">Aventura</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Comedia">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
								<option value="Romance">Romance</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Drama">Drama</option>
								<option value="Animacion">Animacion</option>
								<option value="Crimen">Crimen</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Romance")
								<option value="Romance" selected="">Romance</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Aventura">Aventura</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Comedia">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Drama">Drama</option>
								<option value="Animacion">Animacion</option>
								<option value="Crimen">Crimen</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Fantasia")
								<option value="Fantasia" selected="">Fantasia</option>
								<option value="Romance">Romance</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Aventura">Aventura</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Comedia">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
								<option value="Drama">Drama</option>
								<option value="Animacion">Animacion</option>
								<option value="Crimen">Crimen</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Drama")
								<option value="Drama" selected="">Drama</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Romance">Romance</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Aventura">Aventura</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Comedia">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
								<option value="Animacion">Animacion</option>
								<option value="Crimen">Crimen</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Animacion")
								<option value="Animacion" selected="">Animacion</option>
								<option value="Drama">Drama</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Romance">Romance</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Aventura">Aventura</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Comedia">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
								<option value="Crimen">Crimen</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Crimen")
								<option value="Crimen" selected="">Crimen</option>
								<option value="Animacion">Animacion</option>
								<option value="Drama">Drama</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Romance">Romance</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Aventura">Aventura</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Comedia">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
								<option value="Misterio">Misterio</option>
								<option value="Infantil">Infantil</option>
							@elseif($post->gender == "Misterio")
								<option value="Misterio" selected="">Misterio</option>
								<option value="Crimen">Crimen</option>
								<option value="Animacion">Animacion</option>
								<option value="Drama">Drama</option>
								<option value="Fantasia">Fantasia</option>
								<option value="Romance">Romance</option>
								<option value="Suspenso">Suspenso</option>
								<option value="Aventura">Aventura</option>
								<option value="Infantil">Infantil</option>
								<option value="Ciencia ficcion">Ciencia ficcion</option>
								<option value="Comedia">Comedia</option>
								<option value="Infantil">Infantil</option>
								<option value="Accion">Acción</option>
							@endif
						</select>
					</div>
				</div>

				<div class="mb-3" style="margin-top: 10px;">
					<label for="url">URL <span class="text-muted">(Trailer)</span></label>
					<input type="text" class="form-control" id="url" name="url" value="{{$post->url}}">
				</div>

				<hr class="mb-4">
				<button class="btn btn-success btn-lg btn-block" style="margin-bottom: 20px;" type="submit">Update</button>
			</div>
		</form>
	</div>
</div>

@endsection