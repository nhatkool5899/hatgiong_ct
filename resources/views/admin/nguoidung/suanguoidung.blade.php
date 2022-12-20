@extends('adminquanly')
@section('title', 'Sửa thông tin người dùng')
@section('content')
<form action="/nguoidung/suanguoidung/{{Auth::user()->id_user}}" method="post" enctype="multipart/form-data">
  @csrf
  <h4 class="font-medium leading-tight text-2xl mt-0 mb-2">Sửa thông tin người dùng</h4>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Họ và tên</label>
    <input required type="text" class="form-control" name="name" value="{{ Auth::user()->name}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Ảnh người dùng</label>
    <input type="file" name="avatar" class="form-control-file" accept="image/*">
    <img src="/anhnguoidung/{{ Auth::user()->avatar }}" width="15%";>
  </div>
  <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>
@endsection