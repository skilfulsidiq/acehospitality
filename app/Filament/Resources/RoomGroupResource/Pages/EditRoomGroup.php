<?php

namespace App\Filament\Resources\RoomGroupResource\Pages;

use App\Filament\Resources\RoomGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoomGroup extends EditRecord
{
    protected static string $resource = RoomGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
