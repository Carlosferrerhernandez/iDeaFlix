@extends('layouts.dashboard')

@section('content')

<div class="col-md-6 offset-md-3">
	<div class="card-deck mb-3 text-center">
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h5 class="my-0 font-weight-normal">Posts iDeaFlix</h5>
			</div>
		</div>
	</div>
</div>

<table id="table_info" class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Year</th>
			<th>Category</th>
			<th class="text-center">Url - Preview</th>
			<th>Registration date</th>
			<th class="text-center">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $post)
		<tr>
			<td>{{$post->name}}</td>
			<td>2018</td>
			<td>{{$post->category->description}}</td>
			<td class="text-center">{{$post->url}}</td>
			<td>{{$post->created_at}}</td>
			<td class="text-center">
				<a href="{{ URL::to('posts/' . $post->id . '/edit') }}" rel="tooltip" title="Edit">
					<i class="ti-pencil-alt"></i>Edit
				</a>
				<form action="{{ url('posts/'. $post->id) }}" method="POST">
					{{ csrf_field() }}
                    {{ method_field('DELETE') }}
					<button class="btn btn-danger btn-xs" style="margin-bottom: 20px;" type="submit">Delete</button>
				</form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection