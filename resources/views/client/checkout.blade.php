@extends('client.layout.master')
@section('content')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Thanh toán</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('home')}}">Trang chủ</a>
                        <a href="{{route('shop')}}">Sản phẩm</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="{{route('checkout-store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <h6 class="coupon__code"><span class="icon_tag_alt"></span> Có phiếu giảm giá ? <a href="#">Nhấn vào đây
                        </a> để nhập mã của bạn</h6>
                        <h6 class="checkout__title">Thanh toán chi tiết</h6>
                        <div class="checkout__input">
                            <p>Họ và tên<span>*</span></p>
                            <input type="text" placeholder="VD: Nguyễn Văn A" class="checkout__input__add" name="customer_name">
                            @error('customer_name')
                                <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="checkout__input">
                            <p>Địa chỉ giao hàng<span>*</span></p>
                            <input type="text" placeholder="Street Address" class="checkout__input__add" name="customer_address">
                            @error('customer_address')
                                <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Số điện thoại<span>*</span></p>
                                    <input type="text" name="customer_phone">
                                    @error('customer_phone')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="customer_email">
                                    @error('customer_email')
                                        <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">Đơn hàng của bạn</h4>
                            <div class="checkout__order__products">Sản phẩm <span>Tổng</span></div>
                            <ul class="checkout__total__products">

                                @php
                                    $total = 0
                                @endphp
                                @foreach($carts as $cart)
                                    <li>{{$cart->products->name}} <span>{{number_format($cart->products->price * $cart->qty)}}</span></li>
                                    @php
                                    $total +=($cart->products->price * $cart->qty)
                                @endphp
                                @endforeach
                            </ul>
                            <ul class="checkout__total__all">
                                
                                <li>Tổng <span>{{number_format($total)}} VND</span></li>
                            </ul>
                            <p>Phương thức thanh toán</p>
                            <div class="checkout__input__checkbox">
                                <label for="payment">
                                    Thanh toán khi nhận hàng
                                    <input type="radio" id="payment" name="payment_method" value="cod" active>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="paypal">
                                    Paypal
                                    <input type="radio" id="paypal" name="payment_method" value="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            @error('payment_method')
                                 <span style="color: red;font-size: 14px;">{{$message}}</span>
                            @enderror
                            <button type="submit" class="site-btn">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
@push('script')
<script src="https://www.paypal.com/sdk/js?client-id=env('PAYPAL_SANDBOX_CLIENT_ID')"></script>
@if(Session::has('message'))
<script>
     toastr.success("{{Session::get('message')}}");
</script>
@endif
@endpush