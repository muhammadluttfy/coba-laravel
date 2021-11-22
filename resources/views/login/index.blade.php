@extends('layouts.main')

@section('container')

    <main class="form-signin">
        <div class="row justify-content-center" style="margin-top: 125px !important">
            <div class="col-lg-5">
                <h1 class="h3 mb-3 fw-normal text-center fw-bold">Please Log in</h1>
                <form>
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
