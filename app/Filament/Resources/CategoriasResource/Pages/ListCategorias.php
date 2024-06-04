<?php

namespace App\Filament\Resources\CategoriasResource\Pages;

use App\Filament\Resources\CategoriasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategorias extends ListRecords
{
    protected static string $resource = CategoriasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
