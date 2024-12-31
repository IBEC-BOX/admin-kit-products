<?php

namespace AdminKit\Products;

use AdminKit\Products\Commands\ProductsCommand;
use AdminKit\Products\Providers\RouteServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ProductsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-products')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasMigrations([
                'create_admin_kit_products_table',
                'add_details_column_in_admin_kit_products_table',
                'add_short_text_column_in_admin_kit_products_table',
            ])
            ->hasCommand(ProductsCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
