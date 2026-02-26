<?php

namespace App\Filament\Resources\AreaParkir\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;



class AreaParkirTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_area')
                ->label('ID Area Parkir')
                ->searchable()
                ->sortable(),

                TextColumn::make('nama_area')
                ->label('Nama Area Parkir')
                ->searchable()
                ->sortable(),

                TextColumn::make('kapasitas')
                ->label('Kapasitas')
                ->searchable()
                ->sortable(),

                TextColumn::make('Terisi')
                ->label('Terisi')
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
