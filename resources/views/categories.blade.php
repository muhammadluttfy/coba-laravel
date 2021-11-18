@extends("layouts.main")

@section('container')
    <h2 class="mb-4">All Categories</h2>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-6 col-md-3">
                    <div class="card text-dark bg-light mb-3">
                        <div class="card-header">
                            <a class="text-decoration-none text-dark" href="/categories/{{ $category->slug }}">
                                {{ $category->slug }}
                            </a>
                        </div>
                        <div class="card-body">
                            <a class="text-decoration-none text-dark" href="/categories/{{ $category->slug }}">
                                <h5 class="card-title">{{ $category->name }}</h5>
                            </a>
                            {{-- <p class="card-text">Comingsoon! (Field deskripsi category </p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @endsection
