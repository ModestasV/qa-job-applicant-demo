<?php

namespace App\Filament\Resources\JobListings\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;

class JobListingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(true),
                Textarea::make('description')
                    ->required(true),
                Select::make('status_id')
                    ->relationship('jobStatus', 'name')
                    ->required(true)
            ]);
    }
}
