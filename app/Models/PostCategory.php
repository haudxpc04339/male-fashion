<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Post;
class PostCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'updated_at'
    ];

    protected $table = "post_categories";
    
    public function getPostCategory($id) {

        $query = DB::table($this->table)
                ->SELECT($this->fillable)
                ->Where('id', $id);
                
        $result = $query->first();

        return $result;
    }

    public function getAllPostCategories() {

        $query = DB::table($this->table)
                ->SELECT($this->fillable);
                
        $result = $query->get();

        return $result;
    }

    public function updatePostCategory($id, $data) {

        $query = DB::table($this->table)
                ->Where('id', $id);
                
        $result = $query->update($data);

        return $result;
    }

    public function deletePostCategory($id) {

        $result = DB::table($this->table)
                ->where('id', $id)
                ->delete();

        return $result;
    }

    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }
}
