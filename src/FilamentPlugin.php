<?php

namespace VendorName\Skeleton;

use Filament\Contracts\Plugin;
use Filament\Panel;
use VendorName\Skeleton\UI\Filament\Resources\SingleNameResource;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-:package_slug';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            SingleNameResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
