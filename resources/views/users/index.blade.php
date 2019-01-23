@extends('layouts.dashboard')

@section('content')

<table id="table_info" class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Registration date</th>
			<th class="text-center">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->created_at}}</td>
			<td class="text-center">
				<a href="{{ URL::to('users/' . $user->id) }}" rel="tooltip" title="Edit">
					<i class="ti-pencil-alt"></i>Show user
				</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection