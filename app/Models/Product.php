<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\OrderItem;
use App\Models\ProductReview;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [ 'name', 'slug', 'description','price','discount_price','stock','sku','image'];

    public function carts() {
        return $this->hasMany(Cart::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }

    public function productReviews() {
        return $this->hasMany(ProductReview::class);
    }
}
