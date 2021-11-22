@extends('layouts.main')

@section('container')

    <main class="form-signin">
        <div class="row justify-content-center" style="margin-top: 125px !important">
            <div class="col-lg-5">

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulation!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Login error!</strong> {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif



                <h1 class="h3 mb-3 fw-normal text-center fw-bold">Please Log in</h1>
                <form action="/login" method="post">

                    @csrf

                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control rounded-0 rounded-top @error('email')
                            is-invalid
                        @enderror"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-0 rounded-bottom" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Log in</button>
                </form>
                <small class="d-block text-center mt-3">Not registered ? <a href="/register">Register Now!</a></small>
            </div>
        </div>
    </main>

@endsection
