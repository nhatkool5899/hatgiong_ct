@extends('trangchu')
@section('title', 'Đăng ký đại lý')
@section('content')
<div class="MuiGrid-root wrap-page">

<form action="/daily" method="post">
@csrf
    <div class="mb-3">
        <label class="form-label">Nhập họ và tên của bạn:</label>
        <input type="text" class="form-control" placeholder="Nhập họ và tên của bạn" required name="hovaten">
    </div>
    <div class="mb-3">
        <label class="form-label">Nhập email của bạn:</label>
        <input type="email" class="form-control" placeholder="Nhập email của bạn" required name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Nhập địa chỉ của bạn:</label>
        <input type="text" class="form-control" placeholder="Nhập địa chỉ của bạn" required name="diachi">
    </div>
    <div class="mb-3">
        <label class="form-label">Nhập số điện thoại của bạn:</label>
        <input type="text" class="form-control" placeholder="Nhập số điện thoại của bạn" required name="sodienthoai">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nội dung:</label>
        <textarea class="form-control" rows="3" required name="noidung"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Đăng ký</button>
</form>
</div>
@endsection

