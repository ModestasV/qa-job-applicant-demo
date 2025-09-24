<?php

namespace App\Filament\Resources\Applicants\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class ApplicantInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),
                TextEntry::make('jobListing.title'),
                TextEntry::make('full_name'),
                TextEntry::make('applicantStatus.name'),
                TextEntry::make('created_at')
                    ->dateTime()
            ]);
    }
}
