<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\Product;

class ProductController extends Controller
{
    public function viewCatalog() {
        $catalog = Product::all();
        $productPage = Product::orderBy('created_at', 'desc')->paginate(6);

        return view('catalog', compact('catalog', 'productPage'));
    }
}
