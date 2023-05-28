<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    public $fillable = ['orderDate, orderStatus', 'orderQuantity', 'orderNotes'];

    public function user() {
        return $this -> belongsTo(User::class);
    }

    public function product() {
        return $this -> belongsTo(Product::class);
    }

    public function courier() {
        return $this -> belongsTo(Courier::class);
    }

    public function shipping() {
        return $this -> belongsTo(Shipping::class);
    }
}
