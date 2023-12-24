@extends('admin.layout.master')
@section('content')
<div classs="row">
  <div class="col-md ">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Thêm sản phẩm mới</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{route('admin.products.add')}}" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="product_name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="product_name" placeholder="Tên sản phẩm" name="name" value="{{old('name')}}">
                @error('name')
                  <span style="color: red">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="product_category">Danh mục sản phẩm</label>
                    <select id="product_category" class="form-control multiple-category" name="category_id[]" multiple value="{{old('category_id[]')}}">
                      @foreach($data as $productCategory)
                          <option value="{{$productCategory->id}}">{{$productCategory->name}}</option>
                      @endforeach
                    </select>
                    @error('category_id[]')
                    <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
            </div>
           <div class="col-md-6">
            <div class="form-group">
              <label for="price">Giá sản phẩm</label>
              <input type="text" class="form-control" id="price" placeholder="Giá sản phẩm" name="price" value="{{old('price')}}">
              @error('price')
                <span style="color: red">{{$message}}</span>
              @enderror
            </div>
           </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="sale_price">Giá khuyến mãi</label>
                <input type="text" class="form-control" id="sale_price" placeholder="Giá khuyến mãi" name="sale_price">
                @error('sale_price')
                  <span style="color: red">{{$message}}</span>
               @enderror
              </div>
            </div>
           <div class="col-md-12">
              <div class="form-group">
                 <label>Mô tả</label>
                 <textarea name="description" id="editor" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                 @error('description')
                  <span style="color: red">{{$message}}</span>
                @enderror
              </div>
          </div>
           <div class="col-md-12">
            <div class="form-group">
              <label for="thumbnail">Hình</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="imageUpload" name="image[]" multiple>
                  <label class="custom-file-label" for="thumbnail">Choose file</label>
                </div>
              </div>
              @error('image[]')
              <span style="color: red">{{$message}}</span>
             @enderror
            </div>
            <div id="imagePreviewContainer"></div>
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
@push('link')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- Select  --}}
<script>
  $(".multiple-category").select2({
  maximumSelectionLength: 2
});
</script>
<script>
      const uploadInput = document.getElementById("imageUpload");
   const previewContainer = document.getElementById("imagePreviewContainer");

uploadInput.addEventListener("change", function (e) {
  const files = Array.from(e.target.files);

  files.forEach((file, index) => {
    if (!file.type.startsWith("image/")) return;

    const reader = new FileReader();

    reader.onload = function (event) {
      const preview = document.createElement("div");
      preview.classList.add("img-preview");

      const image = new Image();
      image.src = event.target.result;
      preview.appendChild(image);

      const deleteBtn = document.createElement("button");
      deleteBtn.classList.add("delete-btn");
      deleteBtn.innerHTML = "x";
      deleteBtn.addEventListener("click", () => removeImagePreview(index));
      preview.appendChild(deleteBtn);

      previewContainer.appendChild(preview);
    };

    reader.readAsDataURL(file);
  });
});

function removeImagePreview(index) {
  const previews = document.getElementsByClassName("img-preview");
  previews[index].remove();
}
</script>
@endpush
@push('css')
<style>
#imagePreviewContainer {
  display: flex;
  flex-wrap: wrap;
}

.img-preview {
  position: relative;
  width: 150px;
  height: 150px;
  margin: 10px;
  overflow: hidden;
}

.img-preview img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.delete-btn {
  position: absolute;
  top: 5px;
  right: 5px;
  padding: 0px 8px 3px 8px;
  background-color: black;
  color: white;
  border: none;
  border-radius: 100%;
  cursor: pointer;
}

</style>
@endpush