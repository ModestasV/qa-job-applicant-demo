<?php

namespace App\Filament\Resources\Applicants\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class ApplicantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('job_id')
                    ->relationship('jobListing', 'title')
                    ->required(true),
                TextInput::make('full_name')
                    ->required(true),
                Select::make('status_id')
                    ->relationship('applicantStatus', 'name')
                    ->required(true)
            ]);
    }
}
