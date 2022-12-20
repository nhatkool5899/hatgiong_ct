@extends('adminquanly')
@section('title', 'Quản lý tin tức')
@section('content')
<div class="table-responsive">
  <div class="container-fluid text-center" style="margin: 10px 10px ;">
    <div class="row">
      <div class="col-md-4 offset-md-8"><a href="/quanly/kythuat/themkythuat"><button type="button" class="btn btn-primary" style="width:50%;"><i class="fa-solid fa-plus"></i>Thêm</button></a></div>
    </div>
  </div>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">Tiêu đề</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Ngày tạo</th>
        <th scope="col">Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach($kythuats as $kythuat)
      <tr>
        <td>{{ $kythuat->tieude }}</td>
        <td> {!!Str::limit($kythuat->noidung,100)!!}</td>
        <td> {{$kythuat->created_at}}</td>
        <td><a href="/quanly/kythuat/suakythuat/{{ $kythuat->id_kythuat }}"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
          <a href="/quanly/kythuat/xoakythuat/{{ $kythuat->id_kythuat }}" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa-solid fa-trash"></i>Xóa</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection