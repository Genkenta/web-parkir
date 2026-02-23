<?php

namespace App\Filament\Admin\Resources\AreaParkirs\Pages;

use App\Filament\Admin\Resources\AreaParkirs\AreaParkirResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAreaParkirs extends ListRecords
{
    protected static string $resource = AreaParkirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
