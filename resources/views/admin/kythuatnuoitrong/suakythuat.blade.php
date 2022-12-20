@extends('adminquanly')
@section('title', 'Sửa kỹ thuật')
@section('content')
<form action="/quanly/kythuat/suakythuat/{{ $kythuat->id_kythuat }}" method="post" enctype="multipart/form-data">
  @csrf
  <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Sửa sản phẩm</h4>
  <div class="mb-3">
    <label class="form-label">Tiêu đề</label>
    <input type="text" class="form-control" name="tieude" value="{{ $kythuat->tieude }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Nội dung</label>
    <textarea required class="ckeditor" style="resize: none;" name="noidung" id="noidung" class="form-control">{{ $kythuat->noidung }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>
@endsection