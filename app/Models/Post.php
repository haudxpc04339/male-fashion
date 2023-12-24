<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable =[
        'id',
        'name',
        'slug',
        'category_id',
        'thumbnail',
        'description',
        'content',
        'view',
        'status',
        'updated_at',
        'created_at',
    ];

    public function addPost($data) {
        
        return DB::table($this->table)->insert($data);
    }

    public function getAllPost() {

        $query = DB::table($this->table)
            ->SELECT($this->fillable);
        
        $result = $query->get();

        return $result;
    }

    public function getPost($id) {

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

    public function updatePost($id, $data) {

        $query = DB::table($this->table)
                ->Where('id', $id);
                
        $result = $query->update($data);

        return $result;
    }

    public function deletePost($id) {

        $result = DB::table($this->table)
                ->where('id', $id)
                ->delete();

        return $result;
    }

    public function postCategory():BelongsTo
    {
      
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

}
