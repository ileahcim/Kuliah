<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CatatanMedisResource\Pages;
use App\Filament\Admin\Resources\CatatanMedisResource\RelationManagers;
use App\Models\CatatanMedis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CatatanMedisResource extends Resource
{
    protected static ?string $model = CatatanMedis::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kunjungan_id')
                    ->label('Kunjungan')
                    ->relationship('kunjungan', 'id')
                    ->required(),

                Forms\Components\Textarea::make('diagnosa')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('resep')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('saran')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kunjungan_id')
                    ->numeric()
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
            'index' => Pages\ListCatatanMedis::route('/'),
            'create' => Pages\CreateCatatanMedis::route('/create'),
            'edit' => Pages\EditCatatanMedis::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasAnyRole(['super_admin', 'dokter']);
    }

}
