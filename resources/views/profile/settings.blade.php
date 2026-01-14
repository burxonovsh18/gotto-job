@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Account Settings</h2>

        <form method="POST" action="{{ route('profile.settings.save') }}">
            @csrf

            <!-- Theme -->
            <div>
                <label>Theme</label>
                <select name="theme">
                    <option value="light">Light</option>
                    <option value="dark">Dark</option>
                </select>
            </div>

            <!-- Language -->
            <div>
                <label>Language</label>
                <select name="language">
                    <option value="en">English</option>
                    <option value="uz">Uzbek</option>
                    <option value="ru">Russian</option>
                </select>
            </div>

            <!-- Notifications -->
            <div>
                <label>
                    <input type="checkbox" name="email_notifications" checked>
                    Email notifications
                </label>
            </div>

            <!-- Privacy -->
            <div>
                <label>
                    <input type="checkbox" name="profile_public">
                    Public profile
                </label>
            </div>

            <button type="submit">Save Settings</button>
        </form>
    </div>
@endsection
