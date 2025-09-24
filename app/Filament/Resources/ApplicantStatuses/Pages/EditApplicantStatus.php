<?php

namespace App\Filament\Resources\ApplicantStatuses\Pages;

use App\Filament\Resources\ApplicantStatuses\ApplicantStatusResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditApplicantStatus extends EditRecord
{
    protected static string $resource = ApplicantStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
