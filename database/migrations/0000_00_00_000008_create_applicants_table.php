<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applicants', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('job_listings');
            $table->string('full_name');
            $table->foreignId('status_id')->constrained('applicant_statuses');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
