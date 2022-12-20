@extends('trangchu')
@section('title', 'Kỹ thuật nuôi trồng')
@section('content')
<div class="wrap-page mt-3 ">
    <div style="text-align:left;">
        <div class="name-pd mt-1"><span>{{$kythuat->tieude}}</span></div>
        <div class="mt-1"><span>Ngày đăng:&nbsp;{{$kythuat->created_at}}</span></div>
        <div class="mt-3">
            <style>
                .pb-5 img {
                    width: 100% !important;
                    height: auto !important;
                }
            </style>
            <div style="font-size:18px;">
                <div class="pb-5" style="width: 100%; height: auto;">
                    <?php $kythuat->noidung = html_entity_decode($kythuat->noidung); ?>
                    <?php echo $kythuat->noidung ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection