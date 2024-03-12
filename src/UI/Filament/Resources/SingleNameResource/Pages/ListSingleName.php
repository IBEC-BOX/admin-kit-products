<?php

namespace VendorName\Skeleton\UI\Filament\Resources\SingleNameResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use VendorName\Skeleton\UI\Filament\Resources\SingleNameResource;

class ListSingleName extends ListRecords
{
    protected static string $resource = SingleNameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
