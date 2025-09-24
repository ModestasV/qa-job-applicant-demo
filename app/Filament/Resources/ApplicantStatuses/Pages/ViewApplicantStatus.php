<?php

namespace App\Filament\Resources\ApplicantStatuses\Pages;

use App\Filament\Resources\ApplicantStatuses\ApplicantStatusResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewApplicantStatus extends ViewRecord
{
    protected static string $resource = ApplicantStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
