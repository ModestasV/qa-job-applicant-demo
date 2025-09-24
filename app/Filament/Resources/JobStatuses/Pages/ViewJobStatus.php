<?php

namespace App\Filament\Resources\JobStatuses\Pages;

use App\Filament\Resources\JobStatuses\JobStatusResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewJobStatus extends ViewRecord
{
    protected static string $resource = JobStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
