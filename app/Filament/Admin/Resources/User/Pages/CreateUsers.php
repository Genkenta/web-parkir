<?php

namespace App\Filament\Resources\User\Pages;

use App\Filament\Resources\User\UsersResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUsers extends CreateRecord
{
    protected static string $resource = UsersResource::class;
}
