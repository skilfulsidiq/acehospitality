<?php

namespace App\Filament\Resources\BookingResource\Pages;

use App\Filament\Resources\BookingResource;
use App\Livewire\Booking\BookedRoomList;
use App\Livewire\Booking\PaymentHistoryTable;
use App\Models\Booking;
use Filament\Actions;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Tabs;
use Filament\Infolists\Components\Actions\Action;
use Filament\Infolists\Components\Livewire;

class BookingDetails extends ViewRecord
{
    protected static string $resource = BookingResource::class;

    // public Booking $boooking;

    // public function getViewData(): array
    // {
    //     return $data;
    // }

    public  function infolist(Infolist $infolist): Infolist
    {
        return $infolist->record($this->record)
            ->schema([


                Section::make('Booking Details')
                    ->description('Details of the booking')
                    ->headerActions([
                        Action::make('Invoice')
                            ->action(function () {
                                // ...
                            }),
                    ])

                    ->schema([
                        Grid::make([
                            'default' => 2,
                            'sm' => 2,
                            'md' => 3,
                            'lg' => 4,
                            'xl' => 6,
                            '2xl' => 8,
                        ])
                            ->schema([
                                Section::make('Info')->schema([
                                    Infolists\Components\TextEntry::make('booking_ref'),
                                    Infolists\Components\TextEntry::make('created_at'),
                                    Infolists\Components\TextEntry::make('user.firstname')->label('Firstname'),
                                    Infolists\Components\TextEntry::make('user.lastname')->label('Lastname'),
                                    Infolists\Components\TextEntry::make('user.email')->label('Email'),
                                    Infolists\Components\TextEntry::make('user.phone')->numeric()->label('Phone'),
                                ])->columns(3),

                                Section::make('Rooms')->schema([

                                    Livewire::make(BookedRoomList::class,['record'=>$this->record])->lazy()
                                    // Infolists\Components\ViewEntry::make('logins')
                                    //     ->view('livewire.booking.payment-history-table'),
                                ]),
                                Section::make('Payment')->schema([

                                    Livewire::make(PaymentHistoryTable::class,['record'=>$this->record])->lazy()
                                    // Infolists\Components\ViewEntry::make('logins')
                                    //     ->view('livewire.booking.payment-history-table'),
                                ])
                            ])


                        // Infolists\Components\TextEntry::make('booking_ref')

                    ])->columns([
                            'sm' => 1,
                            'md'=> 2,
                            'xl' => 2,
                        ])






            ]);
    }
}
