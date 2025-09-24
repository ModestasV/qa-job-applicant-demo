<?php

namespace App\Filament\Resources\ApplicantStatuses;

use App\Filament\Resources\ApplicantStatuses\Pages\CreateApplicantStatus;
use App\Filament\Resources\ApplicantStatuses\Pages\EditApplicantStatus;
use App\Filament\Resources\ApplicantStatuses\Pages\ListApplicantStatuses;
use App\Filament\Resources\ApplicantStatuses\Pages\ViewApplicantStatus;
use App\Filament\Resources\ApplicantStatuses\Schemas\ApplicantStatusForm;
use App\Filament\Resources\ApplicantStatuses\Schemas\ApplicantStatusInfolist;
use App\Filament\Resources\ApplicantStatuses\Tables\ApplicantStatusesTable;
use App\Models\ApplicantStatus;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class ApplicantStatusResource extends Resource
{
    protected static ?string $model = ApplicantStatus::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';
    
    public static function form(Schema $schema): Schema
    {
        return ApplicantStatusForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ApplicantStatusInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ApplicantStatusesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListApplicantStatuses::route('/'),
            'create' => CreateApplicantStatus::route('/create'),
            'view' => ViewApplicantStatus::route('/{record}'),
            'edit' => EditApplicantStatus::route('/{record}/edit'),
        ];
    }
}
