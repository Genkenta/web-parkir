<?php

namespace App\Filament\Admin\Resources\LogAktifitas\Pages;

use App\Filament\Admin\Resources\LogAktifitas\LogAktifitasResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditLogAktifitas extends EditRecord
{
    protected static string $resource = LogAktifitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
