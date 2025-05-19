<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JadwalKontrolResource\Pages;
use App\Filament\Admin\Resources\JadwalKontrolResource\RelationManagers;
use App\Models\JadwalKontrol;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalKontrolResource extends Resource
{
    protected static ?string $model = JadwalKontrol::class;

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
                Forms\Components\DatePicker::make('tanggal_kontrol')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'Menunggu' => 'Menunggu',
                        'Selesai' => 'Selesai',
                        'Batal' => 'Batal',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pasien_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_kontrol')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListJadwalKontrols::route('/'),
            'create' => Pages\CreateJadwalKontrol::route('/create'),
            'edit' => Pages\EditJadwalKontrol::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasAnyRole(['super_admin', 'petugas']);
    }

}
