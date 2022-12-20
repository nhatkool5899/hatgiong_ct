@extends('trangchu')
@section('title', 'Sản phẩm')
@section('content')
<div class="wrap-page mt-3 ">
    <div class="MuiTabs-scroller MuiTabs-scrollable" style="margin-bottom: 0px;">
        <div aria-label="disabled tabs example" class="MuiTabs-flexContainer" role="tablist"><button
                class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected" tabindex="0" type="button"
                role="tab" aria-selected="true"><span class="MuiTab-wrapper">Hạt giống</span><span
                    class="MuiTouchRipple-root"></span></button></div><span class="jss8 jss9 MuiTabs-indicator"
            style="left: 0px; width: 179.275px;"></span>
    </div>
    @if($count==0)
    <div class="title-noti-pd"><span>Không có sản phẩm</span></div>
    @else
    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2">
    @foreach($sanphams as $sanpham)
        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 MuiGrid-grid-md-3 MuiGrid-grid-lg-3">
            <a href="/chitietsanpham/{{ $sanpham->id_sanpham }}">
                <div class="wrap-product mt-3" style="width: 100%; margin: 0px auto;">
                    <div class="img-product">
                        <div
                            style="background-color: rgb(255, 255, 255); position: relative; width: 100%; height: 100%; object-fit: contain;">
                            <img src="/anhsanpham/{{$sanpham->anhsanpham}}"
                                style="width: 100%; height: 100%; position: absolute; object-fit: inherit; top: 0px; left: 0px; opacity: 1; transition: filterBrightness 2250ms cubic-bezier(0.4, 0, 0.2, 1) 0s, filterSaturate 3000ms cubic-bezier(0.4, 0, 0.2, 1) 0s, opacity 1500ms cubic-bezier(0.4, 0, 0.2, 1) 0s; border-radius: 10px;">
                            <div
                                style="width: 100%; height: 100%; position: absolute; top: 0px; left: 0px; display: flex; align-items: center; justify-content: center; pointer-events: none;">
                            </div>
                        </div>
                    </div>
                    <div class="name-product mt-1"><span>{{ $sanpham->tensanpham }}</span></div>
                    <div class="price-product mt-1"><span>{{ $sanpham->giasanpham }}</span><span
                            class="ml-1">&nbsp;VND</span></div>
                    <div class="btn-product mt-1"><span><i class="fa-solid fa-cart-shopping"></i></span></div>
                </div>
        </div>
        @endforeach

    </div>
    <br>
    <div class="d-flex justify-content-center">
        {!! $sanphams->links() !!}
    </div>
    @endif
    @endsection