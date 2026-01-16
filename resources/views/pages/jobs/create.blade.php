@extends('layouts.app')

@section('title', 'Post a Job')

@section('content')
<div class="container" style="max-width: 900px; margin: 60px auto;">

    <h1 style="margin-bottom: 30px;">Post a New Job</h1>

    <form method="POST" action="{{ route('jobs.store') }}"
          style="background:#fff; padding:30px; border-radius:8px;">
        @csrf

        <!-- Job Title -->
        <div style="margin-bottom:20px;">
            <label for="job_title"><strong>Job Title</strong></label>
            <input type="text"
                   id="job_title"
                   name="title"
                   class="form-control"
                   placeholder="e.g. Backend Developer"
                   required>
        </div>

        <!-- Company Name -->
        <div style="margin-bottom:20px;">
            <label for="company_name"><strong>Company</strong></label>
            <input type="text"
                   id="company_name"
                   name="company"
                   class="form-control"
                   placeholder="Company name"
                    required>
        </div>

        <!-- Location -->
        <div style="margin-bottom:20px;">
            <label for="job_location"><strong>Location</strong></label>
            <input type="text"
                    id="job_location"
                    name="location"
                    class="form-control"
                    placeholder="City or Remote">
        </div>

        <!-- Job Type -->
        <div style="margin-bottom:20px;">
            <label for="job_type"><strong>Job Type</strong></label>
            <select id="job_type"
                    name="type"
                    class="form-control">
                <option value="full-time">Full Time</option>
                <option value="part-time">Part Time</option>
                <option value="contract">Contract</option>
                <option value="remote">Remote</option>
            </select>
        </div>

        <!-- Salary -->
        <div style="margin-bottom:20px;">
            <label for="job_salary"><strong>Salary (optional)</strong></label>
            <input type="text"
                    id="job_salary"
                    name="salary"
                    class="form-control"
                    placeholder="$2000 - $4000">
        </div>

        <!-- Description -->
        <div style="margin-bottom:30px;">
            <label for="job_description"><strong>Job Description</strong></label>
            <textarea id="job_description"
                        name="description"
                        rows="6"
                        class="form-control"
                        placeholder="Describe the job responsibilities..."
                        required></textarea>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary">
            Publish Job
        </button>
    </form>

</div>
@endsection
