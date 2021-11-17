@extends("layouts.main")

@section('container')

    @foreach ($posts as $post)
        <article class="mb-5">
            <h3>
                <a href="/posts/{{ $post->slug }} ">{{ $post->title }}</a>
            </h3>
            <h6>Penulis : <i>{{ $post['author'] }}</i> </h6>
            <p>{{ $post->excerpt }}</p>
        </article>

    @endforeach

@endsection
