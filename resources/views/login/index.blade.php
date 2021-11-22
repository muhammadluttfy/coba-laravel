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


                <script>
                    $(".alert").alert();
                </script>
                <h1 class="h3 mb-3 fw-normal text-center fw-bold">Please Log in</h1>
                <form action="/login" method="post">

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control rounded-0 rounded-top" id="email"
                            placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-0 rounded-bottom" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Log in</button>
                </form>
                <small class="d-block text-center mt-3">Not registered ? <a href="/register">Register Now!</a></small>
            </div>
        </div>
    </main>

@endsection
