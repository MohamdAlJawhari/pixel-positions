<?php

namespace Tests\Unit;

use App\Models\{Employer, Job};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase; //Tests\TestCase class boots the entire Laravel application for testing.

uses(TestCase::class, RefreshDatabase::class); //uses(TestCase::class); mean: run this test inside the full Laravel environment

// Pest test:

it('belongs to an employer', function () {
    //Arange
    $employer = Employer::factory()->create();

    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act & Assert
    // expect($job->employer)->toBeInstanceOf(Employer::class)
    //                       ->and($job->employer->id)->toBe($employer->id);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can have a tag', function () {

    $job = Job::factory()->create();
    $job->tag('Tag');

    expect($job->tags)->toHaveCount(1);
});
