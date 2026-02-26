<?php

namespace App\Filament\Resources\User\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class UsersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_lengkap')
                ->required()
                ->maxLength(50),

               TextInput::make('username')
               ->required()
               ->maxLength(50),

               TextInput::make('password')
               ->password()
               ->required(),

              Select::make('role')
              ->options([
              'admin' => 'Admin',
              'petugas' => 'Petugas',
              'owner' => 'Owner',
              ])
             ->required(),

             Toggle::make('status_aktif')
             ->label('Status Aktif'),
            ]);
    }
}
