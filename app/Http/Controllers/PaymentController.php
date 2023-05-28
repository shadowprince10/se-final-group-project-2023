<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function viewPaymentDetails($orderID) {
        $order = Order::with(['user', 'product', 'courier', 'shipping']) -> findID($orderID);
        $image = $order -> product -> productImg;
        $name = $order -> product -> productName;
        $price = $order -> product -> price;
        $address = $order -> user -> address;

        return view('payment', compact('image', 'name', 'price', 'address'));
    }
}
