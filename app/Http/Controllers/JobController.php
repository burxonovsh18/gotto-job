<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Http\Requests\JobStoreRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobStoreRequest $request)
    {
        $job = new Job;
        $job->title = $request->title;
        $job->company_name = $request->company_name;
        $job->job_type =$request->job_type;
        $job->store();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jobs = Job::findOrFail($id);

        return view('pages.jobs.index', compact($jobs));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
