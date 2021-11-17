@extends('layouts.main')

@section('container')
    <article>
        <h3> {{ $post->title }} </h3>
        <h6> {{ $post->author }} </h6>
        {!! $post->body !!}
    </article>

    <a href="/posts" class="mt-5">Back to Blog</a>
@endsection
