<?php

namespace App\Filament\Resources\JobListings;

use App\Filament\Resources\JobListings\Pages\CreateJobListing;
use App\Filament\Resources\JobListings\Pages\EditJobListing;
use App\Filament\Resources\JobListings\Pages\ListJobListings;
use App\Filament\Resources\JobListings\Pages\ViewJobListing;
use App\Filament\Resources\JobListings\Schemas\JobListingForm;
use App\Filament\Resources\JobListings\Schemas\JobListingInfolist;
use App\Filament\Resources\JobListings\Tables\JobListingsTable;
use App\Models\JobListing;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class JobListingResource extends Resource
{
    protected static ?string $model = JobListing::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';
    
    public static function form(Schema $schema): Schema
    {
        return JobListingForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JobListingInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobListingsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJobListings::route('/'),
            'create' => CreateJobListing::route('/create'),
            'view' => ViewJobListing::route('/{record}'),
            'edit' => EditJobListing::route('/{record}/edit'),
        ];
    }
}
