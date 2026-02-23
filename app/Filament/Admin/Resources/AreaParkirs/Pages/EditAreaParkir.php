<?php

namespace App\Filament\Admin\Resources\AreaParkirs\Pages;

use App\Filament\Admin\Resources\AreaParkirs\AreaParkirResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAreaParkir extends EditRecord
{
    protected static string $resource = AreaParkirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
