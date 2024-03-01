<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomGroupResource\Pages;
use App\Filament\Resources\RoomGroupResource\RelationManagers;
use App\Models\Amenities;
use App\Models\RoomGroup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomGroupResource extends Resource
{
    protected static ?string $model = RoomGroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('hotel_id')
                //     ->tel()
                //     ->required()
                //     ->numeric(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('images'),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->default(1)
                    ->prefix('N'),
                Forms\Components\TextInput::make('no_of_rooms')
                    ->required()
                    ->numeric()
                    ->default(1),
                Forms\Components\TextInput::make('no_reserved_room')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('bed')
                    ->required()
                    ->numeric()
                    ->default(1),
                Forms\Components\TextInput::make('bath')
                    ->required()
                    ->numeric()
                    ->default(1),

                Forms\Components\Toggle::make('status'),
                Forms\Components\Toggle::make('is_offline'),
                Forms\Components\CheckboxList::make('amenities')
                ->options(Amenities::all()->pluck('name','id'))
                ->columns(2),
                Forms\Components\Textarea::make('desc')
                    ->maxLength(150),
                // Forms\Components\TextInput::make('amenities')
                //     ->maxLength(500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('images')->square()
                    ->label('Image')->defaultImageUrl(url('/hotels')),

                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    // ->money()
                    ->numeric()
                     ->prefix('N')
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_of_rooms')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_reserved_room')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bed')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bath')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\ToggleColumn::make('status')

                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_offline')

                    ->sortable(),


                // Tables\Columns\TextColumn::make('slug')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('desc')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('amenities')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRoomGroups::route('/'),
            'create' => Pages\CreateRoomGroup::route('/create'),
            'edit' => Pages\EditRoomGroup::route('/{record}/edit'),
        ];
    }
}
