@extends("layouts.main")

@section('container')
    <h2 class="mb-4"> {{ $title }} </h2>

    <div class="row">

        @foreach ($posts as $post)

            <div class="col-sm-12 col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/posts/{{ $post->slug }}">
                            <h5 class="card-title"> {{ $post->title }} </h5>
                        </a>
                        <p>
                            <a href="/authors/{{ $post->author->username }}">{{ $post->author->username }}</a> |
                            <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a>
                        </p>
                        <p class="card-text"> {{ $post->excerpt }} </p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>

            {{-- <article class="mb-4 border-bottom pb-4">
                <h3>
                    <a class="text-decoration-none" href="/posts/{{ $post->slug }} ">{{ $post->title }}</a>
                </h3>
                <h6 class="mb-4">
                    Ditulis oleh : <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">
                        {{ $post->author->name }} </a> in
                    <a class="text-decoration-none"
                        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </h6>
                <p>{{ $post->excerpt }}</p>
                <a class="text-decoration-none" href="/posts/{{ $post->slug }} ">Read More..</a>
            </article> --}}

        @endforeach

    </div>

@endsection
