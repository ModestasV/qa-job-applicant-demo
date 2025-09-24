<?php

namespace App\Filament\Resources\JobStatuses\Pages;

use App\Filament\Resources\JobStatuses\JobStatusResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditJobStatus extends EditRecord
{
    protected static string $resource = JobStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
