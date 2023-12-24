@extends('admin.layout.master')
@section('content')
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách bài viết</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 6px">#</th>
                    <th>Tiêu đề bài viết</th>
                    <th>Hình</th>
                    <th>Danh mục bài viết</th>
                    <th>Lượt xem</th>
                    <th>Trạng thái</th>
                    {{-- <th>Ngày đăng</th> --}}
                    <th>Hoạt động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                  <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td><img src="{{asset($post->thumbnail)}}" with="80px" height="80px"/></td>
                    <td>{{$post->postCategory->name}}</td>
                    <td>{{$post->view}}</td>
                    <td>
                      @if($post->status == 1) 
                        
                          <svg class="text-success-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>
                       
                      @else
                      <svg class="text-danger-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                      @endif
                    </td>
                    {{-- <td>{{$post->created_at}}</td> --}}
                    <td>
                      <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="{{route('admin.posts.delete',['id' =>$post->id])}}" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                      </a>
                      <a  class="btn btn-warning" href="{{route('admin.posts.edit',['id' =>$post->id])}}">
                        <i class="fas fa-edit"></i> 
                      </a>
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