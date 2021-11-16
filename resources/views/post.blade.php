@extends('layouts.main')

@section('container')
    <article>
        <h3> {{ $post['title'] }} </h3>
        <h6> {{ $post['author'] }} </h6>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/posts" class="btn btn-primary">Back to Blog</a>
@endsection
