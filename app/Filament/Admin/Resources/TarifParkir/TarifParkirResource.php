<?php

namespace App\Filament\Admin\Resources\TarifParkir;

use App\Filament\Admin\Resources\TarifParkir\Pages\CreateTarifParkir;
use App\Filament\Admin\Resources\TarifParkir\Pages\EditTarifParkir;
use App\Filament\Admin\Resources\TarifParkir\Pages\ListTarifParkirs;
use App\Filament\Admin\Resources\TarifParkir\Schemas\TarifParkirForm;
use App\Filament\Admin\Resources\TarifParkir\Tables\TarifParkirTable;
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

    protected static string|UnitEnum|null $navigationGroup = 'Manajemen Parkir';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Banknotes;

    protected static ?string $navigationLabel = 'Tarif Parkir'; // Mengubah teks di sidebar

    protected static ?string $recordTitleAttribute = 'Tarif Parkir';

    public static function form(Schema $schema): Schema
    {
        return TarifParkirForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TarifParkirTable::configure($table);
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
