@extends('layouts.dashboard')

@section('content')

<div class="col-md-6 offset-md-3">
	<div class="card-deck mb-3 text-center">
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h5 class="my-0 font-weight-normal">Publications of {{ $category->description}} Category</h5>
			</div>
		</div>
	</div>
</div>

<table id="table_info" class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Gender</th>
			<th>Registration date</th>
			<th class="text-center">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr>
			<td>{{$post->name}}</td>
			<td>{{$post->gender}}</td>
			<td>{{$post->created_at}}</td>
			<td class="text-center">
				<a href="{{ URL::to('posts/' . $post->id) }}" rel="tooltip" title="Edit">
					<i class="ti-pencil-alt"></i>Show post
				</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection