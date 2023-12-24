<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $table = 'category_product';
    protected $fillable = [
        'product_id',
        'category_id',
    ];

    public function products():BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function categories():BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
   
}
