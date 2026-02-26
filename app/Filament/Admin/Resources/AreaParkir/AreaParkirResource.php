<?php

namespace App\Filament\Resources\AreaParkir;

use App\Filament\Resources\AreaParkir\Pages\CreateAreaParkir;
use App\Filament\Resources\AreaParkir\Pages\EditAreaParkir;
use App\Filament\Resources\AreaParkir\Pages\ListAreaParkir;
use App\Filament\Resources\AreaParkir\Schemas\AreaParkirForm;
use App\Filament\Resources\AreaParkir\Tables\AreaParkirTable;
use App\Models\AreaParkir;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AreaParkirResource extends Resource
{
    protected static ?string $model = AreaParkir::class;

    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMapPin;

    protected static ?string $navigationLabel = 'Area Parkir';
    
    protected static ?string $modelLabel = 'Area Parkir';

    protected static ?string $pluralModelLabel = 'Area Parkir';


    public static function form(Schema $schema): Schema
    {
        return AreaParkirForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AreaParkirTable::configure($table);
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
            'index' => ListAreaParkir::route('/'),
            'create' => CreateAreaParkir::route('/create'),
            'edit' => EditAreaParkir::route('/{record}/edit'),
        ];
    }
}
