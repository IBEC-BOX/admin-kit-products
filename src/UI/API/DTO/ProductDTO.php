<?php

namespace AdminKit\Products\UI\API\DTO;

use AdminKit\Products\Models\Product;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Concerns\WithDeprecatedCollectionMethod;
use Spatie\LaravelData\Data;

class ProductDTO extends Data
{
    use WithDeprecatedCollectionMethod;

    public function __construct(
        public int $id,
        public string $title,
        public ?string $text,
        public ?string $short_text,
        public ?string $photo,
        public array $details,
        public Collection $attachments,
    ) {}

    public static function fromModel(Product $product): ProductDTO
    {
        return new self(
            id: $product->id,
            title: $product->title,
            text: $product->text,
            short_text: $product->short_text,
            photo: $product->photo,
            details: $product->details ?? [],
            attachments: $product->attachments,
        );
    }
}
