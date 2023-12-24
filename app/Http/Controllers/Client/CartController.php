<?php


namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    

   
    private $_carts;

    public function __construct() {

        $this->_carts = new Cart();
    }

    public function index(Request $request) {
        $userId = Auth::id();
        $carts = Cart::where('user_id',$userId)->get();
        return view('client.shopping-cart', compact('carts'));
    }

    public function store(Request $request) {

        if(Auth::check()){

            $check = Cart::where('product_id', $request->product_id)->where('user_id',Auth::id())->first();
            if ($check) {
    
                Cart::where('product_id',$request->product_id )->increment('qty');
                return redirect()->back()->with('message', 'Thêm sản phẩm vào giỏ hàng thành công');
    
            }else{
                $data = [
                    'product_id' => $request->product_id,
                    'user_id' => Auth::id(),
                    'price' => $request->price,
                    'qty' => $request->qty,
                    'created_at' => now(),
                ];
    
                $this->_carts->addToCart($data);
    
                return redirect()->back()->with('message', 'Thêm sản phẩm vào giỏ hàng thành công');
            }
        }
   
    }

    public function delete($id) {
          Cart::find($id)->delete();
          return redirect()->route('shopping-cart');
    }
}
