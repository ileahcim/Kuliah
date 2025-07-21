<?php

namespace App\Filament\Admin\Resources\VerifiedSubscriberResource\Pages;

use App\Filament\Admin\Resources\VerifiedSubscriberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVerifiedSubscriber extends EditRecord
{
    protected static string $resource = VerifiedSubscriberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
