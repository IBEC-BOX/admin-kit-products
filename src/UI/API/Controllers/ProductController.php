<?php

declare(strict_types=1);

namespace AdminKit\Products\UI\API\Controllers;

use AdminKit\Products\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show(int $id)
    {
        return Product::findOrFail($id);
    }
}
