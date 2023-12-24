@extends('client.layout.master')
@section('content')
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-blog set-bg" data-setbg="template/client/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Bài viết</h2>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset($post->thumbnail)}}"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt="">{{Carbon\Carbon::parse($post->created_at)->format('F j, Y')}}</span>
                            <h5>{{$post->name}}</h5>
                            <a href="{{route('post-detail',['id' => $post->id])}}">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            @endforeach
           
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection