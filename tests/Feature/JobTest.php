<?php

namespace Tests\Unit;

use App\Models\{Employer, Job};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase; //Tests\TestCase class boots the entire Laravel application for testing.

uses(TestCase::class, RefreshDatabase::class); //uses(TestCase::class); mean: run this test inside the full Laravel environment

// PHPUnit class snippet:

class JobTest extends TestCase
{
    use RefreshDatabase;
    public function test_a_job_belongs_to_an_employer(): void
    {
        $employer = Employer::factory()->create();

        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        $this->assertTrue($job->employer->is($employer));
    }
}
