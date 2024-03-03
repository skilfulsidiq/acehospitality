<?php

namespace App\Filament\Resources\BookingResource\Pages;

use App\Filament\Resources\BookingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Model;
use Closure;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    // protected function getTableRecordUrlUsing(): ?Closure
    // {
    //     $actions = ['view', 'edit'];
    //     // $actions = $this->getTableActions();

    //     return function (Model $record)  use ($actions): ?string{


    //         foreach ($actions as $action) {
    //             // $action = $this->getTableAction(['view', 'edit']);
    //             $action = $this->get($action);
    //             dd($action);

    //             if (!$action) {
    //                 continue;
    //             }

    //             $action->record($record);

    //             if ($action->isHidden()) {
    //                 continue;
    //             }

    //             $url = $action->getUrl();

    //             if (!$url) {
    //                 continue;
    //             }

    //             return $url;
    //         }

    //         $resource = static::getResource();

    //         foreach (['view', 'edit'] as $action) {
    //             if (!$resource::hasPage($action)) {
    //                 continue;
    //             }

    //             if (!$resource::{'can' . ucfirst($action)}($record)) {
    //                 continue;
    //             }
    //             // here you need to add slug
    //             return $resource::getUrl($action, ['record' => $record->booking_ref]);
    //         }

    //         return null;
    //     };
    // }
}
