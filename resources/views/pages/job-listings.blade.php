@extends('layouts.app')

@section('title', 'Job Listings')

@section('content')

    <section class="section-padding">
        <div class="container">
            <h2>Available Jobs</h2>

            <div class="job-listing">
                <h5>Web Developer</h5>
                <p>Location: Remote</p>
                <a href="{{ url('/jobs/1') }}" class="btn btn-outline-primary">View Details</a>
            </div>

            <div class="job-listing mt-3">
                <h5>UI/UX Designer</h5>
                <p>Location: New York</p>
                <a href="{{ url('/jobs/2') }}" class="btn btn-outline-primary">View Details</a>
            </div>
        </div>
    </section>

@endsection
