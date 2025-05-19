<?php

namespace App\Filament\Admin\Resources\JadwalKontrolResource\Pages;

use App\Filament\Admin\Resources\JadwalKontrolResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalKontrol extends EditRecord
{
    protected static string $resource = JadwalKontrolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
