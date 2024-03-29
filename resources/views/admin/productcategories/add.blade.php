@extends('admin.layout.master')
@section('content')
<div classs="row ">
    <div class="col-md-12 ">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Thêm sản danh mục</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.productcategories.add')}}" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="row">
  
              <div class="col-md-12">
                <div class="form-group">
                  <label for="category_name">Tên danh mục</label>
                  <input type="text" class="form-control" id="category_name" placeholder="Tên danh mục" name="name">
                  @error('name')
                     <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
              </div>
           
            </div>
  
          </div>
          <!-- /.card-body -->
  
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
          </div>
          @csrf
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection