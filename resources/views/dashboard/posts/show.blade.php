@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-lg-8">
                <h3> {{ $post->title }} </h3>
                <h6 class="mb-4">
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Manage All
                        Posts</a>
                    <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <a href="" class="btn btn-danger"><span data-feather="trash"></span> Delete</a>
                </h6>

                <img src="https://source.unsplash.com/1200x550?{{ $post->category->name }}" class="img-fluid rounded-1"
                    alt="{{ $post->category->naem }}">

                <article class="my-3">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
