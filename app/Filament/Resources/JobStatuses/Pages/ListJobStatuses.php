<?php

namespace App\Filament\Resources\JobStatuses\Pages;

use App\Filament\Resources\JobStatuses\JobStatusResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJobStatuses extends ListRecords
{
    protected static string $resource = JobStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
