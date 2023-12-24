<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;
class ProductCategoryController extends Controller
{
    private $_productCategories;

    public function __construct() {

         $this->_productCategories = new Category();
    }
    public function index() {
        
        $productCategories =  Category::paginate(7);

        return view('admin.productcategories.list', compact('productCategories'));
    }

    public function create() {
        return view('admin.productcategories.add');
    }

    public function store(Request $request) {
 
        $data = [
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $this->_productCategories->addProductCategory($data);
        
        return redirect()->route('admin.productcategories.list')->with('message', 'Thêm danh mục sản phẩm thành công');
    }
    
    public function edit($id) {

        $data = $this->_productCategories->getProductCategory($id);

        return view('admin.productcategories.edit',compact('data'));
    }

    public function update(Request $request, $id) {

        $data = [
            'name' => $request->name,
        ];

        $this->_productCategories->updateProductCategory($id, $data);

        return redirect()->route('admin.productcategories.list')->with('message', 'Cập nhật danh mục thành công!!!');
    }

    public function delete($id) {

        $this->_productCategories->deleteProductCategory($id);

        return redirect()->route('admin.productcategories.list')->with('message', 'Xóa danh mục thành công!!!');
    }
}
