@extends('admin.layout.master')
@section('content')
<div class="row">
    <div class="col-sm">
        <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Danh sách danh mục sản phẩm</h3>
            </div>
         
            <!-- /.card-header -->
            <div class="card-body ">
              <table class="table table-striped">
                <thead >
                  <tr>
                    <th style="width: 30px">ID</th>
                    <th>Tên danh mục</th>
                    <th style="width: 40%">Thời gian cập nhật</th>
                    <th style="width: 200px">Hoạt động</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($productCategories as $category)
                      <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td>
                            <a href="{{route('admin.productcategories.edit',['id' =>$category->id])}}" class="btn btn-warning">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="{{route('admin.productcategories.delete',['id' =>$category->id])}}" class="btn btn-danger">Xóa</a>
                        </td>
                      </tr>
                   
                      @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  {{ $productCategories->links() }}
                 
                </ul>
               
              </div>
             
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