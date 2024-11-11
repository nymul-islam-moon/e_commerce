<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    /** @use HasFactory<\Database\Factories\ProductReviewFactory> */
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [ 'order_id', 'product_id', 'rating','review'];
}
