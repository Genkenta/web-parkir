<?php

namespace App\Filament\Resources\Kendaraan;

use App\Filament\Resources\Kendaraan\Pages\CreateKendaraan;
use App\Filament\Resources\Kendaraan\Pages\EditKendaraan;
use App\Filament\Resources\Kendaraan\Pages\ListKendaraan;
use App\Filament\Resources\Kendaraan\Schemas\KendaraanForm;
use App\Filament\Resources\Kendaraan\Tables\KendaraanTable;
use App\Models\Kendaraan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;
    
    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTruck;

    protected static ?string $navigationLabel = 'Kendaraan';
    
    protected static ?string $modelLabel = 'Kendaraan';
    
    protected static ?string $pluralModelLabel = 'Kendaraan';


    public static function form(Schema $schema): Schema
    {
        return KendaraanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KendaraanTable::configure($table);
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
            'index' => ListKendaraan::route('/'),
            'create' => CreateKendaraan::route('/create'),
            'edit' => EditKendaraan::route('/{record}/edit'),
        ];
    }
}
