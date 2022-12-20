@extends('adminquanly')
@section('title', 'Quản lý đăng ký đại lý')
@section('content')
<div class="table-responsive">
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">Họ và tên</th>
        <th scope="col">Địa chỉ email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dailys as $daily)
      <tr>
        <td>{{ $daily->hovaten }}</td>
        <td>{{ $daily->email }}</td>
        <td>{{ $daily->diachi }}</td>
        <td>{{ $daily->sodienthoai}}</td>
        <td>{{ $daily->noidung}}</td>
        <td>
          <a href="/quanly/dangkydaily/xoadaily/{{ $daily->id_daily }}" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa-solid fa-trash"></i>Xóa</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection