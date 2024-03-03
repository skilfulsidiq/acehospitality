<?php

namespace App\Livewire\Booking;

use App\Models\Booking;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Livewire\Component;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PaymentHistoryTable extends Component implements HasForms, HasTable
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


        return $table
            // ->query(Booking::query())
            ->relationship(fn (): HasMany => $this->record->payment_histories())
            ->columns([
                TextColumn::make('payment_date'),
                TextColumn::make('payment_ref')->searchable(),
                TextColumn::make('payment_method')->searchable(),
                TextColumn::make('amount')->numeric()->searchable(),
                BadgeColumn::make('is_confirmed')
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
        return view('livewire.booking.payment-history-table');
    }
}
