@extends('trangchu')
@section('title', 'Liên hệ')
@section('content')
<div class="MuiGrid-root wrap-page">

<form action="/lienhe" method="post">
@csrf
    <h4>LIÊN HỆ</h4>
    <h6>Thông tin liên hệ</h6>
    <h6>SHOP HẠT GIỐNG CẦN THƠ</h6>
    <ul>
        <li><span>Địa chỉ: 381N15 tổ 6, Khu vực 2, đường Trần Nam Phú, P. An Khánh, Q. Ninh Kiêu, TP.Cần Thơ</span></li>
        <li><span>Điện thoại: 0907888428</span></li>
        <li><span>Email: hatgiongcantho82@gmail.com</span></li>
    </ul>
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
    <button type="submit" class="btn btn-success">Xác nhận</button>
</form>
</div>
@endsection