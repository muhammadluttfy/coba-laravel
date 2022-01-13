@extends('layouts.main')

@section('content')

    <main id="content" role="main">


        <!-- Login Form -->
        <div class="container space-2">
            <form action="/login" method="POST" class="js-validate w-md-75 w-lg-50 mx-md-auto">
                @csrf
                <!-- Title -->
                <div class="mb-5 mb-md-7">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulation!</strong> Y{{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Login Error!</strong> Y{{ session('loginError') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <h1 class="h2 mb-0 mt-3">Welcome back</h1>
                    <p>Login to manage your account.</p>
                </div>
                <!-- End Title -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="input-label @error('email') is-invalid @enderror" for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email address"
                        aria-label="Email address" required data-msg="Please enter a valid email address.">
                    @error('email')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="input-label" for="signinSrPassword">
                        <span class="d-flex justify-content-between align-items-center">
                            Password
                            <a class="link-underline text-capitalize font-weight-normal"
                                href="recover-account-simple.html">Forgot Password?</a>
                        </span>
                    </label>
                    <input type="password" class="form-control" name="password" id="signinSrPassword"
                        placeholder="********" aria-label="********" required
                        data-msg="Your password is invalid. Please try again.">
                </div>
                <!-- End Form Group -->

                <!-- Button -->
                <div class="row align-items-center mb-5">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span class="font-size-1 text-muted">Don't have an account?</span>
                        <a class="font-size-1 font-weight-bold" href="/register">Signup</a>
                    </div>

                    <div class="col-sm-6 text-sm-right">
                        <button type="submit" class="btn btn-primary transition-3d-hover">Get Started</button>
                    </div>
                </div>
                <!-- End Button -->
            </form>
        </div>
        <!-- End Login Form -->
    </main>

@endsection
