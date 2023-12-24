@extends('admin.layout.master')
@section('content')
<div class="row">
    <div class="col-sm">
        <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Danh sách đơn hàng</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body ">
              <table class="table table-striped">
                <thead >
                  <tr>
                    <th style="width: 30px">ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Tổng tiền</th>
                    <th>Ngày đặt</th>
                    <th>Trạng thái</th>
                    <th style="width: 200px">Hoạt động</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->customer_email}}</td>
                        <td>{{$order->customer_phone}}</td>
                        <td>{{$order->customer_address}}</td>
                        <td>{{$order->total}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->status}}</td>
                        <td>
                            <a href="{{route('admin.orders.edit',['id' =>$order->id])}}" class="btn btn-warning">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="{{route('admin.orders.delete',['id' =>$order->id])}}" class="btn btn-danger">Xóa</a>
                        </td>
                      </tr>
                    @endforeach
                  
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                {{ $orders->links() }}
               
              </ul>
             
            </div>
          </div>
    </div>
</div>
@endsection