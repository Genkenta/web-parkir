<?php

namespace App\Filament\Resources\User;

use App\Filament\Resources\User\Pages\CreateUsers;
use App\Filament\Resources\User\Pages\EditUsers;
use App\Filament\Resources\User\Pages\ListUsers;
use App\Filament\Resources\User\Schemas\UsersForm;
use App\Filament\Resources\User\Tables\UsersTable;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|UnitEnum|null $navigationGroup = 'Users';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserPlus;

    protected static ?string $slug = 'users';

    protected static ?string $recordTitleAttribute = 'Users';

    public static function form(Schema $schema): Schema
    {
        return UsersForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
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
            'index' => ListUsers::route('/'),
            'create' => CreateUsers::route('/create'),
            'edit' => EditUsers::route('/{record}/edit'),
        ];
    }
}
