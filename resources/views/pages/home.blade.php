@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section class="hero-section text-center">
        <div class="container">
            <h1 class="text-white">Find your dream job</h1>

            <form class="custom-form mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <input type="text" class="form-control" placeholder="Job title">
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" placeholder="Location">
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-primary w-100">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
