<?php

namespace App\Filament\Admin\Resources\Kendaraans\Pages;

use App\Filament\Admin\Resources\Kendaraans\KendaraanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKendaraans extends ListRecords
{
    protected static string $resource = KendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
