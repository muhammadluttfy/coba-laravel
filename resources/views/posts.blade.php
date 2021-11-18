@extends("layouts.main")

@section('container')
    <h2 class="mb-4"> {{ $title }} </h2>

    @if ($posts->count())

        <div class="card mb-3 text-center">
            <img src="https://source.unsplash.com/1200x350?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->title }}">
            <div class="card-body">
                <a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">
                    <h5 class="card-title">{{ $posts[0]->title }}</h5>
                </a>
                <p>
                    <a class="text-decoration-none"
                        href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->username }}</a> in
                    <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">
                        {{ $posts[0]->category->name }} </a> |
                    <small class="card-text"><small class="text-muted">Last updated
                            {{ $posts[0]->created_at->diffForHumans() }} </small>
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>

            </div>
        </div>
    @else
        <p class="text-center fs-4 text-danger">No post found.</p>

    @endif

    <div class="row">

        @foreach ($posts->skip(1) as $post)

            <div class="col-sm-12 col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute py-2 px-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                        <a class="text-white text-decoration-none"
                            href="/categories/{{ $post->category->slug }} ">{{ $post->category->name }}</a>
                    </div>
                    <img src="https://source.unsplash.com/1200x550?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->title }}">
                    <div class="card-body">
                        <a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">
                            <h5 class="card-title"> {{ $post->title }} </h5>
                        </a>
                        <p>
                            <a class="text-decoration-none"
                                href="/authors/{{ $post->author->username }}">{{ $post->author->username }}</a> |
                            <small> {{ $post->created_at->diffForHumans() }} </small>
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
