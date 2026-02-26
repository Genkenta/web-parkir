<?php

namespace App\Filament\Resources\TarifParkir;

use App\Filament\Resources\TarifParkir\Pages\CreateTarifParkir;
use App\Filament\Resources\TarifParkir\Pages\EditTarifParkir;
use App\Filament\Resources\TarifParkir\Pages\ListTarifParkirs;
use App\Filament\Resources\TarifParkir\Schemas\TarifParkirForm;
use App\Filament\Resources\TarifParkir\Tables\TarifParkirsTable;
use App\Models\TarifParkir;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TarifParkirResource extends Resource
{
    protected static ?string $model = TarifParkir::class;

    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCurrencyDollar;

    protected static ?string $navigationLabel = 'Tarif Parkir'; 

    protected static ?string $recordTitleAttribute = 'TarifParkir';

    protected static ?string $modelLabel = 'Tarif Parkir';

    protected static ?string $pluralModelLabel = 'Tarif Parkir';

    protected static ?string $slug = 'tarif-parkir';


    public static function form(Schema $schema): Schema
    {
        return TarifParkirForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TarifParkirsTable::configure($table);
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
            'index' => ListTarifParkirs::route('/'),
            'create' => CreateTarifParkir::route('/create'),
            'edit' => EditTarifParkir::route('/{record}/edit'),
        ];
    }
}
