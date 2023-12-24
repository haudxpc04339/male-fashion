@extends('admin.layout.master')
@section('content')
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Loại</th>
                    <th>Giá sản phẩm</th>
                    <th>Giá khuyến mãi</th>
                    {{-- <th>Nội dung</th> --}}
                    {{-- <th>Thời gian cập nhật</th> --}}
                    <th style="width: 150px">Hoạt động</th>
                  </tr>
                </thead>
                <tbody>
               
                  @foreach($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td><img src="{{asset($product->productImage['0']['image'])}}" with="80px" height="80px"/></td>
                    <td>  
                      @foreach ($product->categories as $category) 
                        {{$category->name}},
                      @endforeach
                    </td>
                    <td>{{number_format($product->price)}} VND</td>
                    <td>{{number_format($product->sale_price)}} VND</td>
                    
                    <td>
                      <a href="{{route('admin.products.edit',['id' =>$product->id])}}" class="btn btn-warning">Sửa</a>
                      <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="{{route('admin.products.delete',['id' =>$product->id])}}" class="btn btn-danger">Xóa</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
@endsection
@push('script')
@if(Session::has('message'))
<script>
     toastr.success("{{Session::get('message')}}");
</script>
@endif
@endpush