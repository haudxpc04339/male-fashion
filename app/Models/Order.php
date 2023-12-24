<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\OrderDetail;
class Order extends Model
{
    use HasFactory;

    
    protected $table = "orders";

    protected $fillable =[
        'id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
        'user_id',
        'total',
        'status',
        'updated_at',
        'created_at',
    ];

    public function getAllOrders() {

        $query = DB::table($this->table)
                ->SELECT($this->fillable);
        
        $result = $query->get();

        return $result;
    }

    public function addOrders($data) {
        return DB::table($this->table)->insert($data);
    }

    public function orderDetail():HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }
}
