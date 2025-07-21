<?php

namespace App\Filament\Admin\Resources\VerifiedSubscriberResource\Pages;

use App\Filament\Admin\Resources\VerifiedSubscriberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVerifiedSubscribers extends ListRecords
{
    protected static string $resource = VerifiedSubscriberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
