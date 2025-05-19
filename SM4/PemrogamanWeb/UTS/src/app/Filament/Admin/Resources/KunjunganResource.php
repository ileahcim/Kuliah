<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KunjunganResource\Pages;
use App\Filament\Admin\Resources\KunjunganResource\RelationManagers;
use App\Models\Kunjungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KunjunganResource extends Resource
{
    protected static ?string $model = Kunjungan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('pasien_id')
                    ->label('Pasien')
                    ->relationship('pasien', 'nama')
                    ->searchable()
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal')
                    ->required(),
                Forms\Components\Textarea::make('keluhan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pasien_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListKunjungans::route('/'),
            'create' => Pages\CreateKunjungan::route('/create'),
            'edit' => Pages\EditKunjungan::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasAnyRole(['super_admin', 'dokter', 'petugas']);
    }

}
