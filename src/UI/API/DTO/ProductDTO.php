<?php

namespace AdminKit\Products\UI\API\DTO;

use AdminKit\Products\Models\Product;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class ProductDTO extends Data
{
    public function __construct(
        public string $title,
        public string $text,
        public string $photo,
        public Collection $attachments,
    ) {
    }

    public static function fromModel(Product $product): ProductDTO
    {
        return new self(
            title: $product->title,
            text: $product->text,
            photo: $product->photo,
            attachments: $product->attachments,
        );
    }
}
