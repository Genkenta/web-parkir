<?php

namespace App\Filament\Resources\LogAktivitas\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn; // ⭐ TAMBAH INI
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;

class LogAktivitasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_log')
                    ->label('ID')
                    ->sortable(),

                TextColumn::make('user.nama_lengkap')
                    ->label('User')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('aktivitas')
                    ->label('Aktivitas')
                    ->searchable()
                    ->wrap(),

                TextColumn::make('waktu_aktivitas')
                    ->label('Waktu')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('waktu_aktivitas', 'desc')
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