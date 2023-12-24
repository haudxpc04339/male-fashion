<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $table = "carts";

    protected $fillable =[
        'id',
        'product_id',
        'user_id',
        'qty',
        'price',
        'updated_at',
        'created_at',
    ];

    public function addToCart($data) {

        return DB::table($this->table)->insert($data);
    }

    // public function getTotal() {
    //     return DB::table($this->table)->
    // }

  
    public function products():belongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
