@extends('admin.layout.master')
@section('content')
<div classs="row">
  <div class="col-md ">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Cập nhật bài viết mới</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{route('admin.posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
        @method('put')
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="post_name">Tiêu đề bài viết</label>
                <input type="text" class="form-control" id="post_name" placeholder="Tiêu đề bài viết" name="name" value="{{$post->name}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="post_category">Danh mục bài viét</label>
                    <select id="post_category" class="form-control" name="category_id">
                      @foreach($postCategories as $postCategory)
                          <option value="{{$postCategory->id}}">{{$postCategory->name}}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                 <label for="content">Mô tả</label>
                 <textarea name="description" id="content" cols="30" rows="3" class="form-control">{{$post->description}}</textarea>
              </div>
          </div>
           <div class="col-md-12">
              <div class="form-group">
                 <label>Nội dung</label>
                 <textarea name="content" id="editor" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
              </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status">
                <label class="custom-control-label" for="customSwitch1">Trạng thái</label>
              </div>
            </div>
          </div>
           <div class="col-md-12">
            <div class="form-group">
              <label for="thumbnail">Hình</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="selectImage" name="thumbnail" value="{{$post->thumbnail}}">
                  <label class="custom-file-label" for="thumbnail">Choose file</label>
                </div>
              </div>
             
                <img src="{{asset($post->thumbnail)}}" alt="your image" class="mt-3"/>
            
            </div>
           

           </div>
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @csrf
      </form>
    </div>
    <!-- /.card -->


  </div>
</div>
<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>

@endsection
@push('script')
    <script>
        selectImage.onchange = evt => {
            preview = document.getElementById('preview');
            preview.style.display = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
@endpush