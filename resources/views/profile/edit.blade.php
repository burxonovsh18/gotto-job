@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Profile</h2>

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf

            <input type="text" name="name" value="{{ auth()->user()->name }}" placeholder="Name">
            <br>
            <br>
            <input type="email" name="email" value="{{auth()->user()->email }}" placeholder="Email">
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
