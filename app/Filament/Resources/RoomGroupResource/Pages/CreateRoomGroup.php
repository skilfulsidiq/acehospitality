<?php

namespace App\Filament\Resources\RoomGroupResource\Pages;

use App\Filament\Resources\RoomGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRoomGroup extends CreateRecord
{
    protected static string $resource = RoomGroupResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
