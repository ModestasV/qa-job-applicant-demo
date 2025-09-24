<?php

namespace App\Filament\Resources\ApplicantStatuses\Pages;

use App\Filament\Resources\ApplicantStatuses\ApplicantStatusResource;
use Filament\Resources\Pages\CreateRecord;

class CreateApplicantStatus extends CreateRecord
{
    protected static string $resource = ApplicantStatusResource::class;
}