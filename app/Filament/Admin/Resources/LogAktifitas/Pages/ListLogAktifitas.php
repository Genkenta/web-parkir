<?php

namespace App\Filament\Admin\Resources\LogAktifitas\Pages;

use App\Filament\Admin\Resources\LogAktifitas\LogAktifitasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLogAktifitas extends ListRecords
{
    protected static string $resource = LogAktifitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
