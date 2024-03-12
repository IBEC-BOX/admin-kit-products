<?php

declare(strict_types=1);

namespace AdminKit\Products\UI\API\Controllers;

use AdminKit\Products\Models\Product;
use AdminKit\Products\UI\API\DTO\ProductDTO;
use Spatie\LaravelData\PaginatedDataCollection;

class ProductController extends Controller
{
    public function index(): PaginatedDataCollection
    {
        $products = Product::query()
            ->orderBy('sort')
            ->paginate();

        return ProductDTO::collection($products);
    }
}
