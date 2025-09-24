<?php

namespace App\Filament\Resources\JobListings\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class JobListingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),
                TextEntry::make('title'),
                TextEntry::make('description'),
                TextEntry::make('jobStatus.name'),
                TextEntry::make('created_at')
                    ->dateTime()
            ]);
    }
}
