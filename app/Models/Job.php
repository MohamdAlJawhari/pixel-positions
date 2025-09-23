<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'salary',
        'location',
        'schedule',
        'url',
        'featured',
        'employer_id',
    ];

    public function tag(string $name){
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
        return $this;
        
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    
}
