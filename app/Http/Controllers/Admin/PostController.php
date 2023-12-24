<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormPostRequest;
use Illuminate\Http\Request;
use App\Models\PostCategory;
use App\Models\Post;
use Illuminate\Support\Str;



class PostController extends Controller
{
    private $_postCategories;
    private $_posts;

    public function __construct() {

        $this->_posts = new Post();

        $this->_postCategories = new PostCategory();
    }

    public function index() {

        $posts = Post::paginate(10);

        return view('admin.posts.list', compact('posts'));
    }

    public function create() {

        $data = $this->_postCategories->getAllPostCategories();

        return view('admin.posts.add',compact('data'));
    }


    public function store(FormPostRequest $request) {
       
        if($request->has('thumbnail')){

            $file = $request->thumbnail;
           
            $extension = $file->extension();

            $file_name = time().'-'.'product.'.$extension;
            
            $file->move(public_path('uploads/posts'), $file_name);
            
            $img_url = 'uploads/posts/'.$file_name;
        }
         
        $data = [

            'name' => $request->name,
            'slug' => Str::of($request->name)->slug('-'),
            'description' => $request->description,
            'thumbnail' => $img_url,
            'content' => $request->content,
            'category_id' => $request->category_id,
        
        ];

        $this->_posts->addPost($data);

        return redirect()->route('admin.posts.list')->with('message', 'Thêm bài viết thành công');
    }

    
    public function edit($id) {

        $post = $this->_posts->getPost($id);
        
        $postCategories = $this->_postCategories->getAllPostCategories();

        return view('admin.posts.edit',compact('post', 'postCategories'));
    }

    public function update(Request $request, $id) {

        if ($request->has('thumbnail')) {

            $file = $request->thumbnail;
           
            $extension = $file->extension();

            $file_name = time().'-'.'product.'.$extension;
            
            $file->move(public_path('uploads/products'), $file_name);
            
            $img_url = 'uploads/products/'.$file_name;
        } else {
            
            $img_url = $this->_posts->getThumbnail($id);
            
         }

         if ($request->has('status')) {
                $status = 0;
         } else {
                $status = 1;
         }
         
        $data = [
            'name' => $request->name,
            'slug' => Str::of($request->name)->slug('-'),
            'description' => $request->description,
            'thumbnail' => $img_url,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'status' => $status,
        ];

        $this->_posts->updatePost($id, $data);

        return redirect()->route('admin.posts.list')->with('message', 'Cập nhật bài viết thành công!!!');
    }

    public function delete($id) {

        $this->_posts->deletePost($id);

        return redirect()->route('admin.posts.list')->with('message', 'Xóa bài viết thành công!!!');
    }

    
}
