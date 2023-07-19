<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Jobs;

class JobsController extends Controller
{
    public function index()
    {
        return Inertia::render('Jobs/Index', [
            'jobs' => Jobs::latest()->get()
        ]);
    }

    public function show($id)
    {
        $job = Jobs::find($id);

        return Inertia::render('Jobs/Show', [
            'job' => $job
        ]);
    }

    public function update(Jobs $job)
    {


        $attributes = request()->validate([
            'job_title' => 'required',
            'company' => 'required',
            'description' => 'required',
            'status' => 'required',
            'contact_name' => 'required',
            'contact_phone_number' => 'required',
        ]);

        $job->update($attributes);
        return redirect()->route('jobs.index')->with('message', 'Job Updated Successfully');
    }
    public function destroy(Jobs $job)
    {

        // ddd($job);
        $job->delete();
        return redirect()->route('jobs.index')->with('message', 'Job Deleted Successfully');
    }
}
