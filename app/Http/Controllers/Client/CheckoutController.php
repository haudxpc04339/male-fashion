<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormCheckoutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Mail\CheckoutMail;
use App\Models\Order;
use App\Models\OrderDetail;
use DB;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
class CheckoutController extends Controller
{

    private $_orders;
    private $_orderDetail;

    public function __construct() {

        $this->_orders = new Order();
        
        $this->_orderDetail = new OrderDetail();

    }
    public function index () {

        $carts =  Cart::where('user_id',Auth::id())->get();
       
        if(Auth::check()) {

            return view('client.checkout', compact('carts'));
        }else {
             return redirect()->route('login')->with('message', 'Vui lòng đăng nhập tài khoản trước khi thanh toán');
        }
        
      
    }

    public function store(FormCheckoutRequest $request) {
        $userId = Auth::id();
        $carts =  Cart::where('user_id',Auth::id())->get();
        $total = Cart::where('user_id', Auth::id())->select(DB::raw('SUM(price * qty) as total'))->first();
     
        $orderData = [
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_email' => $request->customer_email,
            'customer_address' => $request->customer_address,
            'total' => $total->total,
            'user_id' => $userId
         ];
        
        if ($order = Order::create($orderData)){
            foreach($carts as $cart) {
                $orderDetailData = [
                    'order_id' => $order->id,
                    'product_id' => $cart->product_id,
                    'qty' => $cart->qty,
                    'price' => $cart->price
                ];
                
                $this->_orderDetail->addOrderDetail($orderDetailData);

                $dataOrderDetail =  OrderDetail::where('order_id',$order->id)->get();
             
            }
        }
      
        if ($request->payment_method == 'cod') {

            Cart::where('user_id', $userId)->delete();

            Mail::to($request->customer_email)->send(new CheckoutMail($orderData,$dataOrderDetail));
    
            return redirect()->back()->with('message',' Đặt hàng thành công');
        }

        if($request->payment_method == 'paypal') {

            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $provider->getAccessToken();

            $response = $provider->createOrder([
                'intent' => "CAPTURE",
                "application_context" => [
                    "return_url" =>route('paymentSuccess'),
                    "cancel_url" => route('paymentCancel')
                ],
                "purchase_units" => [
                    0 => [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" =>$total->total
                        ]
                    ]
                ]
            ]);

            if(isset($response['id']) && $response['id'] != null) {

                foreach ($response['links'] as $links) {
                    if ($links['rel'] == 'approve') {
                        return redirect()->away($links['href']);
                    }
                }
            }

            return redirect()->route('checkout')->with('message', 'Lỗi');

        }else{
            return redirect()->route('checkout')->with('message', 'Thành công');
        }
       
    }
    
    public function paymentSuccess(Request $request) {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] =='COMPLETED') {
            return redirect()->route('checkout')->with('message', 'Thành công');
        }else {
            return redirect()->route('checkout')->with('message', $response['message'] ?? 'thất bại');
        }
    }
    public function cancel() {
        return 'lỗi';
    }
}
