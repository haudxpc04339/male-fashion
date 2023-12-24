<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;

class HomeController extends Controller
{

    private $_posts;
    
    private $_productCategories;
    private $_products;

    public function __construct() {

         $this->_productCategories = new Category();

         $this->_products = new Product();

         $this->_posts = new Post();
    }

    public function index() {

        $title =  'Trang chủ';

        return view('client.home', compact('title'));
    }

    public function shop() {

        $title =  'Sản phẩm';

        $productCategories = $this->_productCategories->getAllProductCategories();

        $products = Product::paginate(8);


        return view('client.shop', compact('title', 'productCategories','products'));
    }

    public function search(Request $request) {

        $keyword = $request->keyword;

        $productCategories = $this->_productCategories->getAllProductCategories();
        
        $products = Product::where('name', 'like', "%$keyword%")->get();

        return view('client.search',compact('products','productCategories'));
    }

    public function shopDetail($id) {

        $title =  'Sản phẩm chi tiết';

        // $productCategories = $this->_productCategories->getAllProductCategories();

         $product =  Product::where('id', $id)->first();

        return view('client.shop-details', compact('title', 'product'));
    }

    public function Post() {

        $title =  'Bài viết';

        $posts = $this->_posts->getAllPost();

        return view('client.posts', compact('title', 'posts'));
    }

    public function postDetail($id) {

        $title =  'Bài viết chi tiết';

        $post = $this->_posts->getPost($id);

        return view('client.post-details', compact('title', 'post'));
    }

    public function contact() {

        $title =  'Trang chủ';

        return view('client.contact', compact('title'));
    }

    public function about() {

        $title =  'Trang chủ';

        return view('client.about', compact('title'));
    }

   
}
