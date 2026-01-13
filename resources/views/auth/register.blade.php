@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-8">
                    <div class="card shadow-sm p-4">

                        <h3 class="text-center mb-4">Create Account</h3>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text"  id ='name' name="name" value='name' class="form-control" placeholder="Your name" required>
                            </div>

                            <div class="mb-3">
                                <label>Username</label>
                                <input type="username" id='username' value="username" name="username" class="form-control" placeholder="Username"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" id="email" value="email" name="email" class="form-control" placeholder="Email address" required>
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" id ='password' value="password" name="password" class="form-control" placeholder="Password" required>
                            </div>

                            <div class="mb-3">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm password" required>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>

                        <p class="text-center mt-3 mb-0">
                            Already have an account?
                            <a href="{{ route('login') }}">Login</a>
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
