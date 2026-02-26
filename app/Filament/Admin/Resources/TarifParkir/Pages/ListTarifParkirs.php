<?php

namespace App\Filament\Resources\TarifParkir\Pages;

use App\Filament\Resources\TarifParkir\TarifParkirResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTarifParkirs extends ListRecords
{
    protected static string $resource = TarifParkirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
