<?php

namespace App\Filament\Resources\RoomGroupResource\Pages;

use App\Filament\Resources\RoomGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoomGroups extends ListRecords
{
    protected static string $resource = RoomGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
