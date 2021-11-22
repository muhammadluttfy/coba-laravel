@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-8">
                <h3> {{ $post->title }} </h3>
                <h6 class="mb-4">
                    by. <a class="text-decoration-none"
                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    in
                    <a class="text-decoration-none"
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }} |
                    </a>
                    <small> {{ $post->created_at->diffForHumans() }} </small>
                </h6>

                <img src="https://source.unsplash.com/1200x550?{{ $post->category->name }}" class="img-fluid rounded-1"
                    alt="{{ $post->category->naem }}">

                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="mt-3 d-block">Back to Blog</a>
            </div>
        </div>
    </div>

@endsection
