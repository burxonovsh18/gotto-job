@extends('layouts.app')

@section('title', 'Profile Settings')

@section('content')
<div class="container" style="max-width: 900px; margin: 60px auto;">

    <h1 style="margin-bottom: 30px;">Profile Settings</h1>

    <form method="POST" action="{{ route('profile.settings.save') }}"
          style="background:#fff; padding:30px; border-radius:8px;">
        @csrf

        <!-- Language -->
        <div style="margin-bottom:20px;">
            <label><strong>Language</strong></label>
            <select name="language" class="form-control">
                <option value="en">English</option>
                <option value="uz">Uzbek</option>
                <option value="ru">Russian</option>
            </select>
        </div>

        <!-- Theme -->
        <div style="margin-bottom:20px;">
            <label><strong>Theme</strong></label>
            <select name="theme" class="form-control">
                <option value="light">Light</option>
                <option value="dark">Dark</option>
            </select>
        </div>

        <!-- Email notifications -->
        <div style="margin-bottom:20px;">
            <label>
                <input type="checkbox" name="email_notifications">
                Receive email notifications
            </label>
        </div>

        <!-- Public profile -->
        <div style="margin-bottom:30px;">
            <label>
                <input type="checkbox" name="profile_public">
                Make my profile public
            </label>
        </div>

        <button type="submit" class="btn btn-primary">
            Save Settings
        </button>
    </form>

</div>
@endsection

