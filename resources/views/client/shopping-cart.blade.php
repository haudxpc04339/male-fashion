@extends('client.layout.master')
@section('content')
      <!-- Breadcrumb Section Begin -->
      <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Giỏ hàng</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Trang chủ</a>
                            <a href="{{route('shop')}}">Shop</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                   @php
                                      $total = 0;
                                     
                                   @endphp
                               
                                    @foreach($carts as $cart)
                                        <tr>
                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    <img src="img/shopping-cart/cart-1.jpg" alt="">
                                                </div>
                                                <div class="product__cart__item__text">
                                                    <h6>{{$cart->products->name ?? ''}}</h6>
                                                    <h5>{{number_format($cart->price)}} VND</h5>
                                                </div>
                                            </td>
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="pro-qty-2">
                                                        <input type="text" value="{{$cart->qty}}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__price">{{number_format($cart->price * $cart->qty)}} VND</td>
                                            <td class="cart__close"><a href="{{route('delete-cart',['id' => $cart->id])}}"><i class="fa fa-close"></i></a></td>
                                        </tr>

                                        @php 
                                           $total += ($cart->price * $cart->qty);
                                        @endphp
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{route('shop')}}">Tiếp tục mua hàng</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i>Cập nhật giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Mã giảm giá</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Áp dụng</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Tổng giỏ hàng</h6>
            
                        <ul>
                            <li>Tổng <span>{{number_format($total)}} VND</span></li>
                        </ul>
                        
                         <a href="{{route('checkout')}}" class="primary-btn">Tiếp tục thanh toán</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
@push('script')
@if(Session::has('message'))
<script>
     toastr.success("{{Session::get('message')}}");
</script>
@endif
@endpush