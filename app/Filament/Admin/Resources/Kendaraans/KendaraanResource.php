<?php

namespace App\Filament\Admin\Resources\Kendaraans;

use App\Filament\Admin\Resources\Kendaraans\Pages\CreateKendaraan;
use App\Filament\Admin\Resources\Kendaraans\Pages\EditKendaraan;
use App\Filament\Admin\Resources\Kendaraans\Pages\ListKendaraans;
use App\Filament\Admin\Resources\Kendaraans\Schemas\KendaraanForm;
use App\Filament\Admin\Resources\Kendaraans\Tables\KendaraansTable;
use App\Models\Kendaraan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Kendaraan';

    public static function form(Schema $schema): Schema
    {
        return KendaraanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KendaraansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKendaraans::route('/'),
            'create' => CreateKendaraan::route('/create'),
            'edit' => EditKendaraan::route('/{record}/edit'),
        ];
    }
}
