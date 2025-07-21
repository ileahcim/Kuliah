<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\VerifiedSubscriberResource\Pages;
use App\Filament\Admin\Resources\VerifiedSubscriberResource\RelationManagers;
use App\Models\VerifiedSubscriber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class VerifiedSubscriberResource extends Resource
{
    protected static ?string $model = VerifiedSubscriber::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Interaksi Pengguna';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('email')->email()->required(),
            TextInput::make('verified_at')->default(now())->disabled(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('email'),
            TextColumn::make('verified_at')->since(),
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
            'index' => Pages\ListVerifiedSubscribers::route('/'),
            'create' => Pages\CreateVerifiedSubscriber::route('/create'),
            'edit' => Pages\EditVerifiedSubscriber::route('/{record}/edit'),
        ];
    }
}
