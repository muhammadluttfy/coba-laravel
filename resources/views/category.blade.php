@extends("layouts.main")

@section('container')
    <h2 class="mb-4">Post Category : {{ $category }}</h2>

    @foreach ($posts as $post)
        <article class="mb-5">
            <h3>
                <a href="/posts/{{ $post->slug }} ">{{ $post->title }}</a>
            </h3>
            <h6>Penulis : <i>{{ $post->author->name }}</i> </h6>
            <p>{{ $post->excerpt }}</p>
        </article>

    @endforeach

@endsection
