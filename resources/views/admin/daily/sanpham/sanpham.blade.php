@extends('adminquanly')
@section('title', 'Quản lý sản phẩm')
@section('content')
<div class="table-responsive">
  <div class="container-fluid text-center" style="margin: 10px 10px ;">
    <div class="row">
      <div class="col-md-4 offset-md-8"><a href="/quanly/sanpham/themsanpham"><button type="button" class="btn btn-primary" style="width:50%;"><i class="fa-solid fa-plus"></i>Thêm</button></a></div>
    </div>
  </div>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Loại sản phẩm</th>
        <th scope="col">Ảnh sản phẩm</th>
        <th scope="col">Mô tả sản phẩm</th>
        <th scope="col">Thông tin sản phẩm</th>
        <th scope="col">Giá sản phẩm</th>
        <th scope="col">Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sanphams as $sanpham)
      <tr>
        <td>{{ $sanpham->tensanpham }}</td>
        <td>{{ $sanpham->loaisanpham }}</td>
        <td><img src="/images/{{$sanpham->anhsanpham}}"></td>
        <?php $sanpham->motasanpham = html_entity_decode($sanpham->motasanpham); ?>
        <td><?php echo $sanpham->motasanpham ?></td>
        <?php $sanpham->thongtinsanpham = html_entity_decode($sanpham->thongtinsanpham); ?>
        <td><?php echo $sanpham->thongtinsanpham ?></td>
        <td>{{ $sanpham->giasanpham }}&nbsp;VND</td>
        <td><a href="/quanly/sanpham/suasanpham/{{ $sanpham->id_sanpham }}"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
          <a href="/quanly/sanpham/xoasanpham/{{ $sanpham->id_sanpham }}" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa-solid fa-trash"></i>Xóa</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection