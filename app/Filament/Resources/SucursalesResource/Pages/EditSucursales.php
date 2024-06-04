<?php

namespace App\Filament\Resources\SucursalesResource\Pages;

use App\Filament\Resources\SucursalesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSucursales extends EditRecord
{
    protected static string $resource = SucursalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
