<?php

namespace App\Filament\Resources\CategoriasResource\Pages;

use App\Filament\Resources\CategoriasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategorias extends EditRecord
{
    protected static string $resource = CategoriasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
