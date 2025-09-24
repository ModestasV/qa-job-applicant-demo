<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobListing extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 
        'description', 
        'status_id'
    ];

    public function jobStatus()
    {
        return $this->belongsTo(JobStatus::class, 'status_id');
    }
}