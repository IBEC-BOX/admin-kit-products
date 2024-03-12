<?php

namespace AdminKit\Products;

use AdminKit\Products\UI\Filament\Resources\ProductResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-products';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            ProductResource::class,
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
