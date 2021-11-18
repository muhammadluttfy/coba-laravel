@extends("layouts.main")

@section('container')
    <h2 class="mb-4">Halaman Blog Posts</h2>

    @foreach ($posts as $post)
        <article class="mb-4 border-bottom pb-4">
            <h3>
                <a class="text-decoration-none" href="/posts/{{ $post->slug }} ">{{ $post->title }}</a>
            </h3>
            <h6 class="mb-4">
                by. <a class="text-decoration-none" href="#"> {{ $post->user->name }} </a> in
                <a class="text-decoration-none"
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </h6>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/posts/{{ $post->slug }} ">Read More..</a>
        </article>

    @endforeach

@endsection
