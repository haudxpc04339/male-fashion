<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
   
    private $_orders;

    public function __construct() {

        $this->_orders = new Order();

       
    }

    public function index() {

        $orders = Order::paginate(7)->orderBy('created_at');

        return view('admin.orders.list', compact('orders'));
    }
}
