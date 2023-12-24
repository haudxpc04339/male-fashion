<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable =[
        'id',
        'name',
        'slug',
        'price',
        'sale_price',
        'description',
        'updated_at'
    ];

    public function addProduct($data) {
        
        return DB::table($this->table)->insert($data);
    }

    public function getAllProduct() {

        $query = DB::table($this->table)
                ->join('product_categories', 'category_id', '=', 'product_categories.id')
                ->SELECT(
                    'category_id',
                    'price',
                    'sale_price',
                    'description',
                    'product_categories.name as productCategories_name',
                    'products.id as id', 'products.name as name'
                 );
        
        $result = $query->get();

        return $result;
    }

    public function getProduct($id) {

        $query = DB::table($this->table)
                ->SELECT($this->fillable)
                ->Where('id', $id);
                
        $result = $query->first();

        return $result;
    }


    public function getThumbnail($id) {

        $query = DB::table($this->table)
                ->Where('id', $id);
                
        $result = $query->pluck('thumbnail')[0];

        return $result;
    }

    public function updateProduct($id, $data) {

        $query = DB::table($this->table)
                ->Where('id', $id);
                
        $result = $query->update($data);

        return $result;
    }

    public function deleteProduct($id) {

        $result = DB::table($this->table)
                ->where('id', $id)
                ->delete();

        return $result;
    }

  

    public function productCategory():HasMany
    {
        return $this->hasMany(ProductCategory::class);
    }

    public function carts():HasMany
    {
      
        return $this->hasMany(Cart::class);
    }

    public function orderDetail():HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function productImage():HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
