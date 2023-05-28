<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrder($productID) {
        $product = Product::findID($productID);
        $image = $product -> productImg;
        $name = $product -> productName;
        $price = $product -> rentalPrice;
        $rating = $product -> productRating;
        $stock = $product -> stock;
        $desc = $product -> description;

        return view('order', compact('image', 'name', 'price', 'rating', 'stock', 'desc'));
    }
}
