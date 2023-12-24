<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Product;;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    protected $table = "categories";
    
    public function addProductCategory($data) {

        return DB::table($this->table)->insert($data);
    }
    
    public function getProductCategory($id) {

        $query = DB::table($this->table)
                ->SELECT($this->fillable)
                ->Where('id', $id);
                
        $result = $query->first();

        return $result;
    }

    public function getAllProductCategories() {

        $query = DB::table($this->table)
                ->SELECT($this->fillable);
                
        $result = $query->get();

        return $result;
    }

    public function updateProductCategory($id, $data) {

        $query = DB::table($this->table)
                ->Where('id', $id);
                
        $result = $query->update($data);

        return $result;
    }

    public function deleteProductCategory($id) {

        $result = DB::table($this->table)
                ->where('id', $id)
                ->delete();

        return $result;
    }

   

    public function productCategory():HasMany
    {
        return $this->hasMany(ProductCategory::class);
    }
    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
