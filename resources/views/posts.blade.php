@extends("layouts.main")

@section('container')
    <div class="row justify-content-center mb-4">
        <div class="col-lg-6">
            <h2 class="mb-3 text-center"> {{ $title }} </h2>

            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}"
                        placeholder="Search posts">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())

        <div class="card mb-3 text-center">

            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid rounded-1"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x350?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->title }}">
            @endif

            <div class="card-body">
                <a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">
                    <h5 class="card-title">{{ $posts[0]->title }}</h5>
                </a>
                <p>
                    <a class="text-decoration-none"
                        href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->username }}</a>
                    in
                    <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">
                        {{ $posts[0]->category->name }} </a> |
                    <small class="card-text"><small class="text-muted">Last updated
                            {{ $posts[0]->created_at->diffForHumans() }} </small>
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>

            </div>
        </div>

        <div class="row">

            @foreach ($posts->skip(1) as $post)
                <div class="col-sm-12 col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute py-2 px-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a class="text-white text-decoration-none"
                                href="/posts?category={{ $post->category->slug }} ">{{ $post->category->name }}</a>
                        </div>

                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded-1"
                                alt="{{ $post->category->naem }}">
                        @else
                            <img src="https://source.unsplash.com/1200x550?{{ $post->category->name }}"
                                class="card-img-top" alt="{{ $post->title }}">
                        @endif

                        <div class="card-body">
                            <a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">
                                <h5 class="card-title"> {{ $post->title }} </h5>
                            </a>
                            <p>
                                <a class="text-decoration-none"
                                    href="/posts?author={{ $post->author->username }}">{{ $post->author->username }}</a>
                                |
                                <small> {{ $post->created_at->diffForHumans() }} </small>
                            </p>
                            <p class="card-text"> {{ $post->excerpt }} </p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    @else
        <p class="text-center fs-4 text-danger">No post found.</p>
    @endif

    <div class="d-flex float-end mb-5">
        {{ $posts->links() }}
    </div>

@endsection
