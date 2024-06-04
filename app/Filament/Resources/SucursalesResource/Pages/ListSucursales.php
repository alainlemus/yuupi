<?php

namespace App\Filament\Resources\SucursalesResource\Pages;

use App\Filament\Resources\SucursalesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSucursales extends ListRecords
{
    protected static string $resource = SucursalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
