<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;

class ProductReview extends Model
{
    /** @use HasFactory<\Database\Factories\ProductReviewFactory> */
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [ 'order_id', 'product_id', 'rating','review'];

    public function order (){
        return $this->belongsTo(Order::class);
    }

    public function product (){
        return $this->belongsTo(Product::class);
    }
}
