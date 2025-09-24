<?php

namespace App\Filament\Resources\ApplicantStatuses\Pages;

use App\Filament\Resources\ApplicantStatuses\ApplicantStatusResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListApplicantStatuses extends ListRecords
{
    protected static string $resource = ApplicantStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
