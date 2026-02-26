<?php

namespace App\Filament\Resources\Kendaraan\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class KendaraanTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_kendaraan')
                ->label('ID')
                ->searchable()
                ->sortable(),

                TextColumn::make('plat_nomor')
                ->label('Plat Nomor')
                ->searchable()
                ->sortable(),

                TextColumn::make('jenis_kendaraan')
                ->label('Jenis Kendaraan')
                ->searchable()
                ->sortable(),

                TextColumn::make('warna')
                ->label('Warna')
                ->searchable()
                ->sortable(),

                TextColumn::make('pemilik')
                ->label('Pemilik')
                ->searchable()
                ->sortable(),

                
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
