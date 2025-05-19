<?php

namespace App\Filament\Admin\Resources\CatatanMedisResource\Pages;

use App\Filament\Admin\Resources\CatatanMedisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCatatanMedis extends EditRecord
{
    protected static string $resource = CatatanMedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
