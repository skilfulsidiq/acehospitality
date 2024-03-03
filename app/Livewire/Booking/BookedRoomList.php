<?php

namespace App\Livewire\Booking;

use Livewire\Component;
use App\Models\Booking;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;

class BookedRoomList extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public Booking $record;
    public function mount($record): void
    {
        $this->record = $record;
    }

    public function table(Table $table): Table
    {

        // dd($this->record->room_bookings()->get());
        return $table
            ->relationship(fn(): HasMany => $this->record->room_bookings())
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('price')->numeric(),
                TextColumn::make('night')->numeric(),
                TextColumn::make('arrival_date')->searchable(),
                TextColumn::make('departure_date')->searchable(),
                TextColumn::make('checked_in_at')->searchable(),
                BadgeColumn::make('checked_out_at')
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }
    public function render()
    {
        return view('livewire.booking.booked-room-list');
    }
}
