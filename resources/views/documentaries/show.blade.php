@extends('layouts.home')

@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
	<div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-normal">{{$documental->name}}</h1>
		<p class="lead font-weight-normal">{{$documental->description}}</p>
		<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">Show trailer</button>
	</div>
	<div class="product-device shadow-sm d-none d-md-block"></div>
	<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="container-fluid">
	<h3>Contenido</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem illum facere consequatur maxime totam eligendi rerum nemo suscipit tempore. Veniam inventore laboriosam totam dicta corporis et veritatis libero in natus rerum, eveniet a asperiores vero, aperiam earum eos omnis iste. Aliquid unde iusto magnam repellendus esse tempora impedit ullam dignissimos culpa at quibusdam quam, molestias ea dolor aspernatur sint suscipit ut tempore omnis molestiae, nesciunt, architecto recusandae nam corrupti! Ad.</p>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo velit doloremque quas, officia repudiandae reprehenderit dolores. Quae exercitationem voluptatibus quas, suscipit beatae fugiat eveniet voluptas quod consectetur ut, dicta ipsa minima odit sunt provident a quis quaerat cum in placeat at. Repudiandae quam ipsa porro.</p>
</div>

<div class="container-fluid">
	<h3>Detalles</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem illum facere consequatur maxime totam eligendi rerum nemo suscipit tempore. Veniam inventore laboriosam totam dicta corporis et veritatis libero in natus rerum, eveniet a asperiores vero, aperiam earum eos omnis iste. Aliquid unde iusto magnam repellendus esse tempora impedit ullam dignissimos culpa at quibusdam quam, molestias ea dolor aspernatur sint suscipit ut tempore omnis molestiae, nesciunt, architecto recusandae nam corrupti! Ad.</p>
</div>

<form class="needs-validation" role="form" method="POST" action="{{ route('comentarios.store') }}">

	{{ csrf_field() }}
	<div class="container-fluid">
		<h3>Comentarios</h3>
		@if($comments->count())
			@foreach($comments as $comment)
				{{$comment->description}}
				<p><strong>by:</strong> {{$comment->user->name}}</p>
			@endforeach
		@else
		<p>Be the first to comment</p>
		@endif

		<div class="row">
			<div class="col-10">
				<input type="text" class="form-control" name="description" id="description" placeholder="" required>

				<input type="text" class="form-control" name="post_id" id="post_id" placeholder="" value="{{$documental->id}}" required style="display: none">
			</div>
			<div class="col">
				<button type="submit" class="btn btn-success">Save</button>
			</div>
		</div>
	</div>
</form>

<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-6">
			<h3>Más documentales</h3>
		</div>
		<div class="col-6 text-right">
			<a href="{{route('documentales.index')}}">
				<button type="button" class="btn btn-link" style="text-align: left">Ver todos</button>
			</a>
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

	<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Trailer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
			  <iframe width="420" height="345" src="https://www.youtube.com/embed/{{$documental->url}}"></iframe>
			</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
@endsection