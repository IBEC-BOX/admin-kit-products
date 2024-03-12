<?php

namespace VendorName\Skeleton\UI\Filament\Resources\SingleNameResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use VendorName\Skeleton\UI\Filament\Resources\SingleNameResource;

class EditSingleName extends EditRecord
{
    protected static string $resource = SingleNameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
