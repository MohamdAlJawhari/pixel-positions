<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearhController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::where('title', 'like', '%' . request('q') . '%')->get();

        return view('results', ['jobs' => $jobs]);
    }
}
