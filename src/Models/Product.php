<?php

namespace AdminKit\Products\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Products\Database\Factories\ProductFactory;

class Product extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_products';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): ProductFactory
    {
        return new ProductFactory();
    }
}
