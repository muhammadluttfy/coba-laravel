@extends('layouts.main')

@section('container')
    <article>
        <h3> {{ $post->title }} </h3>
        <h6 class="mb-4"> by. Muhammad Lutfi in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </h6>
        {!! $post->body !!}
    </article>

    <a href="/posts" class="mt-5">Back to Blog</a>
@endsection
