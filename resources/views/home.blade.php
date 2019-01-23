@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h6 class="my-0 font-weight-normal">Posts</h6>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <p>Description</p>
                </div>
                <a class="btn btn-sm btn-block btn-outline-success" href="{{ route('posts.create')}}">Create posts</a>
                <hr>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h6 class="my-0 font-weight-normal">Categories</h6>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <p>Description</p>
                </div>
                <a class="btn btn-sm btn-block btn-outline-success" href="{{ route('categories.create')}}">Create categories</a>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
