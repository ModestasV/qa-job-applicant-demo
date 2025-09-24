<?php

namespace App\Filament\Resources\JobStatuses\Pages;

use App\Filament\Resources\JobStatuses\JobStatusResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJobStatus extends CreateRecord
{
    protected static string $resource = JobStatusResource::class;
}