<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('hotel_id')
                    ->relationship('hotel', 'id'),
                Forms\Components\TextInput::make('user_id')
                    ->numeric(),
                Forms\Components\TextInput::make('booking_ref')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('grand_total')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('total_payment')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('tax')
                    ->numeric(),
                Forms\Components\TextInput::make('vat')
                    ->numeric(),
                Forms\Components\TextInput::make('item_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('booking_status')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('payment_status')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 Tables\Columns\TextColumn::make('created_at')->label('Date')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('booking_ref')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.firstname')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('grand_total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('item_count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('booking_status')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_status')
                    ->numeric()
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                    // ->url(fn(Model $record): string => static::getUrl('view', ['record' => $record->booking_ref])),
                Tables\Actions\EditAction::make()
                // ->url(fn(Model $record): string => static::getUrl('view', ['record' => $record->booking_ref])),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
            'view' =>Pages\BookingDetails::route('{record}/details')
        ];
    }
}
