@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-5 col-md-7">
                    <div class="card shadow-sm p-4">

                        <h3 class="text-center mb-4">Login</h3>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password"
                                    required>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </form>

                        <p class="text-center mt-3 mb-0">
                            Don’t have an account?
                            <a href="{{ route('register') }}">Register</a>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
