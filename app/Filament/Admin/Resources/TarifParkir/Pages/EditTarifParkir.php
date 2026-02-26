<?php

namespace App\Filament\Resources\TarifParkir\Pages;

use App\Filament\Resources\TarifParkir\TarifParkirResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTarifParkir extends EditRecord
{
    protected static string $resource = TarifParkirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
