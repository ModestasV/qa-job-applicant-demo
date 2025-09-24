<?php

namespace App\Filament\Resources\JobStatuses;

use App\Filament\Resources\JobStatuses\Pages\CreateJobStatus;
use App\Filament\Resources\JobStatuses\Pages\EditJobStatus;
use App\Filament\Resources\JobStatuses\Pages\ListJobStatuses;
use App\Filament\Resources\JobStatuses\Pages\ViewJobStatus;
use App\Filament\Resources\JobStatuses\Schemas\JobStatusForm;
use App\Filament\Resources\JobStatuses\Schemas\JobStatusInfolist;
use App\Filament\Resources\JobStatuses\Tables\JobStatusesTable;
use App\Models\JobStatus;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class JobStatusResource extends Resource
{
    protected static ?string $model = JobStatus::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';
    
    public static function form(Schema $schema): Schema
    {
        return JobStatusForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JobStatusInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobStatusesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJobStatuses::route('/'),
            'create' => CreateJobStatus::route('/create'),
            'view' => ViewJobStatus::route('/{record}'),
            'edit' => EditJobStatus::route('/{record}/edit'),
        ];
    }
}
