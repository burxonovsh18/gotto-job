@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Profile</h2>

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf

            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}">

            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}">

            <button type="submit">Save</button>
        </form>
    </div>
@endsection
