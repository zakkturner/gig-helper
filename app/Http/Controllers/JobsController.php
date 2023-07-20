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


    public function create()
    {
        return Inertia::render('Jobs/Create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'job_title' => 'required',
            'company' => 'required',
            'description' => 'required',
            'status' => 'required',
            'contact_name',
            'contact_phone_number'
        ]);
        $attributes['contact_name'] = request()->contact_name;
        $attributes['contact_phone_number'] = request()->contact_phone_number;
        $attributes['user_id'] = auth()->id();
        Jobs::create($attributes);
        return redirect()->route('jobs.index')->with('message', 'Job Created Successfully');
    }

    public function update(Jobs $job)
    {


        $attributes = request()->validate([
            'job_title' => 'required',
            'company' => 'required',
            'description' => 'required',
            'status' => 'required',

        ]);

        $attributes['contact_name'] = request()->contact_name;
        $attributes['contact_phone_number'] = request()->contact_phone_number;

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
