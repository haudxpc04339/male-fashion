<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use DB;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'image'
    ];
 
    protected $table = 'product_images';

    public function getThumbnail($id) {

        $query = DB::table($this->table)
                ->Where('id', $id);
                
        $result = $query->pluck('image')[0];

        return $result;
    }

    public function products():BelongsTo
    {
      
        return $this->belongsTo(Product::class, 'product_id');
    }
}
