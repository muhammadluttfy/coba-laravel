@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-lg-8">
                <h3> {{ $post->title }} </h3>
                <h6 class="mb-4">
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Manage All
                        Posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span
                            data-feather="edit"></span> Edit</a>

                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @csrf

                        @method('delete')
                        <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span
                                data-feather="trash"></span> Delete</button>
                    </form>
                </h6>

                @if ($post->image)
                    <div style="max-height: 310px; overflow: hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded-1"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x550?{{ $post->category->name }}" class="img-fluid rounded-1"
                        alt="{{ $post->category->name }}">
                @endif

                <article class="my-3">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
