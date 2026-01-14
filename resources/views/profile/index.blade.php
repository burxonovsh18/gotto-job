@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
<div class="container" style="max-width: 900px; margin: 60px auto;">

    <h1 style="margin-bottom: 30px;">My Profile</h1>

    <div style="background:#fff; padding:30px; border-radius:8px;">
        <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>

        <hr style="margin:20px 0;">

        <a href="{{ route('profile.edit') }}" class="btn btn-primary">
            Edit Profile
        </a>

        <a href="{{ route('profile.settings') }}" class="btn btn-secondary">
            Settings
        </a>
    </div>

</div>
@endsection
