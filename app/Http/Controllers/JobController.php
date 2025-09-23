<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Arr;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function index()
    // {
    //     $jobs = Job::latest()
    //         ->with(['employer', 'tags'])
    //         ->get()
    //         ->groupBy('featured');

    //     return view('jobs.index', [
    //         'jobs' => $jobs[0],
    //         'featuredJobs' => $jobs[1],
    //         'tags' => Tag::all(),
    //     ]);
    // }

    // make sure that if one bucket is empty
    public function index()
    {
        $all = Job::latest()
            ->with(['employer', 'tags'])
            ->get();

        $featuredJobs = $all->filter->featured->values(); // only featured
        $jobs = $all;
        return view('jobs.index', [
            'jobs' => $jobs,
            'featuredJobs' => $featuredJobs,
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'description' => ['required', 'string', 'min:10'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Full-time', 'Part-time', 'Contract'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags')); // create all the atributes without the tags

        if ($attributes['tags'] ?? false) {
            $tags = array_map(
                fn($tag) => strtolower(trim($tag)), // insure that the tags are in lowercase
                explode(',', $attributes['tags']) //video, education, programing => ['video', 'education', 'programing']
            );

            foreach ($tags as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
