<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;


class OrderDetail extends Model
{
    use HasFactory;
    
    protected $table = "order_detail";

    protected $fillable =[
        'id',
        'order_id',
        'product_id',
        'qty',
        'price',
        'updated_at',
        'created_at',
    ];


    public function addOrderDetail($data) {
        return DB::table($this->table)->insert($data);
    }

    public function products():BelongsTo
    {
      
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function orders():BelongsTo
    {
      
        return $this->belongsTo(Order::class, 'order_id');
    }
}
