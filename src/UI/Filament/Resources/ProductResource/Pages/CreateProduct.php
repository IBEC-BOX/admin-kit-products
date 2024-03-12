<?php

namespace AdminKit\Products\UI\Filament\Resources\ProductResource\Pages;

use AdminKit\Products\UI\Filament\Resources\ProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return ProductResource::getUrl();
    }
}
