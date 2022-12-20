@extends('adminquanly')
@section('title', 'Thêm tin tức')
@section('content')

    <form action="/quanly/tintuc/themtintuc" method="post" enctype="multipart/form-data">
        @csrf
        <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Thêm tin tức</h4>
  <div class="mb-3">
    <label class="form-label">Tiêu đề</label>
    <input require type="text" class="form-control" name="tieude" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Nội dung</label>
    <textarea class="ckeditor" style="resize: none;" id="noidung" name="noidung" class="form-control" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection


