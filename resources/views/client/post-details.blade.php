@extends('client.layout.master')
@section('content')
 <!-- Blog Details Hero Begin -->
 <section class="blog-hero spad">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="blog__hero__text">
                    <h2>{{$post->name}}</h2>
                    <ul>
                        <li>Bởi Xuân Hậu</li>
                        <li>{{Carbon\Carbon::parse($post->created_at)->format('F j, Y')}}</li>
                        <li>8 Bình luận</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Hero End -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="blog__details__pic">
                    <img src="{{asset($post->thumbnail)}}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog__details__content">
                    <div class="blog__details__share">
                        <span>Chia sẻ</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                   
                    <div class="blog__details__quote">
                        <i class="fa fa-quote-left"></i>
                        <p>“{!!$post->description!!}”</p>
                        <h6>_ Xuân Hậu _</h6>
                    </div>
                    <div class="blog__details__text">
                        <p>{!!$post->content!!}</p>
                    </div>
                    <div class="blog__details__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="img/blog/details/blog-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h5>Aiden Blair</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__details__tags">
                                  <span>Hay quá</span>
                                  <span>12:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
              
                    <div class="blog__details__comment">
                        <h4>Bình luận</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <textarea placeholder="Comment"></textarea>
                                    <button type="submit" class="site-btn">Đăng bình luận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
@endsection