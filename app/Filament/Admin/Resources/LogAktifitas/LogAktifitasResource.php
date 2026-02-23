<?php

namespace App\Filament\Admin\Resources\LogAktifitas;

use App\Filament\Admin\Resources\LogAktifitas\Pages\CreateLogAktifitas;
use App\Filament\Admin\Resources\LogAktifitas\Pages\EditLogAktifitas;
use App\Filament\Admin\Resources\LogAktifitas\Pages\ListLogAktifitas;
use App\Filament\Admin\Resources\LogAktifitas\Schemas\LogAktifitasForm;
use App\Filament\Admin\Resources\LogAktifitas\Tables\LogAktifitasTable;
use App\Models\LogAktifitas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LogAktifitasResource extends Resource
{
    protected static ?string $model = LogAktifitas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'LogAktifitas';

    public static function form(Schema $schema): Schema
    {
        return LogAktifitasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LogAktifitasTable::configure($table);
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
            'index' => ListLogAktifitas::route('/'),
            'create' => CreateLogAktifitas::route('/create'),
            'edit' => EditLogAktifitas::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
