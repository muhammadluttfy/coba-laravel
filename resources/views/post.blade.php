@extends('layouts.main')

@section('container')
    <article>
        <h3> {{ $post->title }} </h3>
        <h6 class="mb-4">
            by. <a class="text-decoration-none"
                href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            in
            <a class="text-decoration-none"
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h6>
        {!! $post->body !!}
        <a href="/posts" class="mt-3 d-block">Back to Blog</a>
    </article>

@endsection
