<?php

namespace App\Filament\Resources\LogAktivitas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;

class LogAktivitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('id_user')
                    ->relationship('user', 'nama_lengkap')
                    ->required(),

                TextInput::make('aktivitas')
                    ->required(),

                DateTimePicker::make('waktu_aktivitas')
                    ->required(),
            ]);
    }
}
