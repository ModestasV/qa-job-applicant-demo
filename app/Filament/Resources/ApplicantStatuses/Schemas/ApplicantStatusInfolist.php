<?php

namespace App\Filament\Resources\ApplicantStatuses\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class ApplicantStatusInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),
                TextEntry::make('name'),
                TextEntry::make('created_at')
                    ->dateTime()
            ]);
    }
}
