<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'job_id', 
        'full_name', 
        'status_id'
    ];

    public function jobListing()
    {
        return $this->belongsTo(JobListing::class, 'job_id');
    }

    public function applicantStatus()
    {
        return $this->belongsTo(ApplicantStatus::class, 'status_id');
    }
}