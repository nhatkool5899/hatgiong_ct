@extends('trangchu')
@section('title', 'Kỹ thuật nuôi trồng')
@section('content')
<div class="wrap-page mt-3 ">
    <div class="MuiTabs-scroller MuiTabs-scrollable" style="margin-bottom: 0px;">
        <div aria-label="disabled tabs example" class="MuiTabs-flexContainer" role="tablist"><button
                class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected" tabindex="0" type="button"
                role="tab" aria-selected="true"><span class="MuiTab-wrapper">Kỹ thuật nuôi trồng</span><span
                    class="MuiTouchRipple-root"></span></button></div><span class="jss8 jss9 MuiTabs-indicator"
            style="left: 0px; width: 179.275px;"></span>
    </div>
    @if($count==0)
    <div class="title-noti-pd"><span>Không có kỹ thuật nuôi trồng</span></div>
    @else
    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2">
        @foreach($kythuats as $kythuat)
        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-3 MuiGrid-grid-md-3 MuiGrid-grid-lg-12">
            <a href="/kythuatnuoitrong/{{ $kythuat->id_kythuat }}">
                <div class="wrap-product">
                <div class="name-product mt-1" style="text-align:left;"><span>{{$kythuat->tieude}}</span></div>
                <div class="mt-1"><span class="date-news">Ngày đăng:&nbsp;{{$kythuat->created_at}}</div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection