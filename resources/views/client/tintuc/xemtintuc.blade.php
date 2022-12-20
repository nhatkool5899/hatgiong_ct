@extends('trangchu')
@section('title', 'Tin tức')
@section('content')
<div class="wrap-page mt-3 ">
    <div style="text-align:left;">
        <div class="name-pd mt-1"><span>{{$tintuc->tieude}}</span></div>
        <div class="mt-1"><span>Ngày đăng:&nbsp;{{$tintuc->created_at}}</span></div>
        <div class="mt-3">
            <style>
                .pb-5 img {
                    width: 100% !important;
                    height: auto !important;
                }
            </style>
            <div style="font-size:18px;">
                <div class="pb-5" style="width: 100%; height: auto;">
                    <?php $tintuc->noidung = html_entity_decode($tintuc->noidung); ?>
                    <?php echo $tintuc->noidung ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection