<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormProductRequest;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use DB;
class ProductController extends Controller
{
    private $_productCategories;
    private $_products;

    public function __construct() {

         $this->_productCategories = new Category();

         $this->_products = new Product();
    }

    public function index() {

        $products = Product::with('categories')->get();
   
        return view('admin.products.list', compact('products'));
    }
    public function create() {

        $data = $this->_productCategories->getAllProductCategories();

        return view('admin.products.add',compact('data'));
    }

    public function store(FormProductRequest $request) {
         
        $data = [
            'name' => $request->name,
            'slug' => Str::of($request->name)->slug('-'),
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
        ];

        if ($product = Product::create($data)) {

            if ($request->has('image')) {
                $array_file = $request->file('image');
                $i = 1;
                foreach($array_file as $file) {
           
                    $extension = $file->extension();
        
                    $file_name = time().'-'.'product'.'-'.$i.'.'.$extension;
                    
                    $file->move(public_path('uploads/products'), $file_name);
                    
                    $img_url = 'uploads/products/'.$file_name;

                    $data_ProductImage = [
                        'product_id'=> $product->id,
                         'image' => $img_url
                    ];

                    ProductImage::insert($data_ProductImage);
                    $i++;
                }
            }
           
                $array_category = $request->category_id;

                foreach($array_category as $category) {
                    $dataCategory = [
                        'product_id' => $product->id,
                        'category_id' => $category, 
                    ];

                    CategoryProduct::insert($dataCategory);
                }
        }

        return redirect()->route('admin.products.list')->with('message', 'Thêm sản phẩm thành công');
    }

    public function edit($id) {

        $product = Product::with('categories')->where('id', $id)->first();
        
        // $product =  Product::where('id', $id)->first();
        
        $category = $this->_productCategories->getAllProductCategories();

        return view('admin.products.edit',compact('product', 'category'));
    }

    public function update(Request $request, $id) {

        $product = Product::with('categories')->where('id', $id)->first();
         
        $data = [
            'name' => $request->name,
            'slug' => Str::of($request->name)->slug('-'),
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
        ];

        $categories = $request->input('category_id'); 
        $product->categories()->sync($categories);

        if ($product = Product::find($id)->update($data)) {
            if ($request->has('image')) {
                $array_file = $request->file('image');
                $i = 1;
                foreach($array_file as $file) {
           
                    $extension = $file->extension();
        
                    $file_name = time().'-'.'product'.'-'.$i.'.'.$extension;
                    
                    $file->move(public_path('uploads/products'), $file_name);
                    
                    $img_url = 'uploads/products/'.$file_name;

                    $data_ProductImage = [
                        'product_id'=> $id,
                         'image' => $img_url
                    ];

                    ProductImage::where('product_id',$id)->update($data_ProductImage);
                    $i++;
                }
            }

        }

        return redirect()->route('admin.products.list')->with('message', 'Cập nhật sản phẩm thành công!!!');
    }

    public function delete($id) {

        // $this->_products->deleteProduct($id);
        $product = Product::findOrFail($id);
        $categories = $product->categories;
        $product->categories()->detach($categories->pluck('id'));
        $product->delete();
    
        return redirect()->route('admin.products.list')->with('message', 'Xóa sản phẩm thành công!!!');
    }
}
