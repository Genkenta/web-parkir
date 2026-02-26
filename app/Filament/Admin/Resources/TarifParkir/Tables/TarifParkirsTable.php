<?php

namespace App\Filament\Resources\TarifParkir\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TarifParkirsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_tarif')
                ->label('ID')
                ->searchable()
                ->searchable(),

                TextColumn::make('jenis_kendaraan')
                    ->label('Jenis Kendaraan')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'motor'   => 'danger',
                        'mobil' => 'warning',
                        'lainnya'   => 'success',
                        default   => 'gray',
                    })
                    ->sortable()
                    ->searchable(),

                    TextColumn::make('tarif_per_jam')
                      ->label('Tarif Per Jam')
                      ->searchable()
                      ->searchable(),


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
