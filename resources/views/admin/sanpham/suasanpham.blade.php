@extends('adminquanly')
@section('title', 'Sửa sản phẩm')
@section('content')
<form action="/quanly/sanpham/suasanpham/{{ $sanpham->id_sanpham }}" method="post" enctype="multipart/form-data">
  @csrf
  <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Sửa sản phẩm</h4>
  <div class="mb-3">
    <label class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="tensanpham" value="{{ $sanpham->tensanpham }}" require>
  </div>
  <div class="mb-3">
    <label class="form-label">Loại sản phẩm</label>
    <select class="form-select" name="loaisanpham" require>
      <option value="Đất sạch - Phân sạch">Đất sạch - Phân sạch</option>
      <option value="Hạt giống cây ăn trái">Hạt giống cây ăn trái</option>
      <option value="Hạt giống rau">Hạt giống rau</option>
      <option value="Hạt giống rau mầm">Hạt giống rau mầm</option>
      <option value="Hạt giống các loại củ">Hạt giống các loại củ</option>
      <option value="Hạt giống các loại hoa">Hạt giống các loại hoa</option>
      <option value="Chậu">Chậu</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Ảnh sản phẩm</label>
    <input type="file" name="anhsanpham" class="form-control-file" accept="image/*">
    <img src="/anhsanpham/{{ $sanpham->anhsanpham }}" width="15%";>
  </div>
  <div class="mb-3">
    <label class="form-label">Mô tả sản phẩm</label>
    <textarea class="ckeditor" style="resize: none;" name="motasanpham" id="motasanpham" class="form-control">{{ $sanpham->motasanpham }}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Thông tin sản phẩm</label>
    <textarea class="ckeditor" style="resize: none;" name="thongtinsanpham" id="thongtinsanpham" class="form-control">{{ $sanpham->thongtinsanpham }}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Giá sản phẩm</label>
    <input type="number" class="form-control" id="giasanpham" name="giasanpham" min="1000" required value="{{ $sanpham->giasanpham }}">
  </div>
  <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>
@endsection