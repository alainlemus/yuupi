<?php

namespace App\Filament\Dashboard\Resources\TenantResource\Pages;

use App\Filament\Dashboard\Resources\TenantResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTenant extends CreateRecord
{
    protected static string $resource = TenantResource::class;

    protected function afterCreate(): void{

        $tenant = $this->getRecord();

        $tenant->domains()->create([
            'domain' => $this->data['domain'],
        ]);

    }
}
