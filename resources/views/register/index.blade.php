@extends('layouts.main')

@section('content')

    <main id="content" role="main">
        <!-- Login Form -->
        <div class="container space-2">
            <form action="/register" method="POST" class="js-validate w-md-75 w-lg-50 mx-md-auto">
                @csrf

                <!-- Title -->
                <div class="mb-5 mb-md-7">
                    <h1 class="h2 mb-0">Welcome to Front</h1>
                    <p>Fill out the form to get started.</p>
                </div>
                <!-- End Title -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="input-label @error('name') is-invalid @enderror" for="name">Fullname</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Input your name"
                        aria-label="Full name" required data-msg="Please enter a valid Full name."
                        value="{{ old('name') }}">

                    @error('name')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- End Form Group -->


                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="input-label @error('username') is-invalid @enderror" for="username">Email address</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                        aria-label="Username" required data-msg="Please enter a valid username."
                        value="{{ old('username') }}">

                    @error('username')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- End Form Group -->


                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="input-label @error('email') is-invalid @enderror" for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email address"
                        aria-label="Email address" required data-msg="Please enter a valid email address."
                        value="{{ old('email') }}">

                    @error('email')
                        <div class="      invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="input-label @error('password') is-invalid @enderror" for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="********"
                        aria-label="********" required data-msg="Your password is invalid. Please try again.">

                    @error('password')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- End Form Group -->


                <!-- Checkbox -->
                <div class="js-form-message mb-5">
                    <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                        <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required
                            data-msg="Please accept our Terms and Conditions.">
                        <label class="custom-control-label" for="termsCheckbox">
                            <small>
                                I agree to the
                                <a class="link-underline" href="../pages/terms.html">Terms and Conditions</a>
                            </small>
                        </label>
                    </div>
                </div>
                <!-- End Checkbox -->

                <!-- Button -->
                <div class="row align-items-center mb-5">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span class="font-size-1 text-muted">Already have an account?</span>
                        <a class="font-size-1 font-weight-bold" href="/login">Login</a>
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
