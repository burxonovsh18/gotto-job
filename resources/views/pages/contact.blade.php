@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <section class="section-padding">
        <div class="container">
            <h2>Contact Us</h2>

            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your name">
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                </div>

                <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                </div>

                <button class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

@endsection
