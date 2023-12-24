<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;
use DB;


class PostCategoryController extends Controller
{
    private $_postCategories;

    public function __construct() {

         $this->_postCategories = new PostCategory();
    }

    public function index() {

        $data = $this->_postCategories->getAllPostCategories();

        return view('admin.postcategories.list', compact('data'));
    }

    public function create() {
        return view('admin.postcategories.add');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            
        ], [
            'name.required' => 'Vui lòng nhập tên danh mục',
        ]);
 
        $data = [
            'name' => $request->name,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        DB::table('post_categories')->insert($data);
        return redirect()->route('admin.postcategories.list')->with('message', 'Thêm danh mục bài viết thành công');
    }
    
    public function edit($id) {

        $data = $this->_postCategories->getPostCategory($id);

        return view('admin.postcategories.edit',compact('data'));
    }

    public function update(Request $request, $id) {

        $data = [
            'name' => $request->name,
        ];

        $this->_postCategories->updatePostCategory($id, $data);

        return redirect()->route('admin.postcategories.list')->with('message', 'Cập nhật danh mục thành công!!!');
    }

    public function delete($id) {

        $this->_postCategories->deletePostCategory($id);

        return redirect()->route('admin.postcategories.list')->with('message', 'Xóa danh mục thành công!!!');
    }

   
}
