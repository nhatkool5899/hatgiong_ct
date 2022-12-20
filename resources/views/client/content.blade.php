@extends('trangchu')
@section('title', 'Trang chủ')
@section('content')
<div class="mt-1">


    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/zbfcezvplyzpdeixrink.jpg')}}"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/vjh0to9k5em0eoqnufem.jpg')}}"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>






</div>

<div class="mt-3">
    <div class="MuiGrid-root">
        <div>
            <div class="MuiTabs-root">
                <div class="MuiTabs-scrollable"
                    style="width: 99px; height: 99px; position: absolute; top: -9999px; overflow: scroll;"></div>
                <div class="MuiTabs-scroller MuiTabs-scrollable" style="margin-bottom: 0px;">
                    <div aria-label="disabled tabs example" class="MuiTabs-flexContainer" role="tablist"><button
                            class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected" tabindex="0"
                            type="button" role="tab" aria-selected="true"><span class="MuiTab-wrapper">Đất sạch - phân
                                sạch</span><span class="MuiTouchRipple-root"></span></button></div><span
                        class="jss8 jss9 MuiTabs-indicator" style="left: 0px; width: 180.1px;"></span>
                </div>
            </div>
        </div>
        @if($countdat==0)
    <div class="title-noti-pd"><span>Không có sản phẩm</span></div>
    @else
        <div style="width: 100%; min-height: 300px; margin-top: 20px;">
            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1">

                @foreach($sanphams -> where('loaisanpham', 'Đất sạch - Phân sạch')->take(4) as $sanpham)

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
                            <div class="price-product mt-1"><span>{{ $sanpham->giasanpham }}</span><span class="ml-1">&nbsp;VND</span></div>
                            <div class="btn-product mt-1"><span><i class="fa-solid fa-cart-shopping"></i></span></div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="btn-view-all"><a href="/loaisanpham/datsachphansach"><span>Xem thêm</span></a></div>
            </div>
        </div>
        @endif
    </div>
</div>
<div class="mt-3">
    <div class="MuiGrid-root">
        <div style="width: 100%; min-height: 300px; margin-top: 20px;">
            <ul class="nav nav-pills nav-fill" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#hatgiongcayantrai"
                        type="button" role="tab" aria-selected="true">Hạt giống cây ăn trái</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#hatgiongrau" type="button"
                        role="tab" aria-selected="false">Hạt giống rau</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#hatgiongraumam" type="button"
                        role="tab" aria-selected="false">Hạt giống rau mầm</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#hatgiongcacloaicu" type="button"
                        role="tab" aria-selected="false">Hạt giống các loại củ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#hatgiongcacloaihoa" type="button"
                        role="tab" aria-selected="false">Hạt giống các loại hoa</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="hatgiongcayantrai" role="tabpanel" tabindex="0">
                @if($countantrai==0)
    <div class="title-noti-pd"><span>Không có sản phẩm</span></div>
    @else
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1">

                        @foreach($sanphams -> where('loaisanpham', 'Hạt giống cây ăn trái')->take(4) as $sanpham)

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
                            <div class="price-product mt-1"><span>{{ $sanpham->giasanpham }}</span><span class="ml-1">&nbsp;VND</span></div>
                            <div class="btn-product mt-1"><span><i class="fa-solid fa-cart-shopping"></i></span></div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <div class="btn-view-all"><a href="/loaisanpham/hatgiongcayantrai"><span>Xem thêm</span></a></div>
                    </div>
                    @endif
                </div>
                <div class="tab-pane fade" id="hatgiongrau" role="tabpanel" tabindex="0">
                @if($countrau==0)
    <div class="title-noti-pd"><span>Không có sản phẩm</span></div>
    @else
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1">

                        @foreach($sanphams -> where('loaisanpham', 'Hạt giống rau')->take(4) as $sanpham)

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
                            <div class="price-product mt-1"><span>{{ $sanpham->giasanpham }}</span><span class="ml-1">&nbsp;VND</span></div>
                            <div class="btn-product mt-1"><span><i class="fa-solid fa-cart-shopping"></i></span></div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <div class="btn-view-all"><a href="/loaisanpham/hatgiongrau"><span>Xem thêm</span></a></div>
                    </div>
                    @endif
                </div>
                <div class="tab-pane fade" id="hatgiongraumam" role="tabpanel" tabindex="0">
                @if($countraumam==0)
    <div class="title-noti-pd"><span>Không có sản phẩm</span></div>
    @else
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1">

                        @foreach($sanphams -> where('loaisanpham', 'Hạt giống rau mầm')->take(4) as $sanpham)

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
                            <div class="price-product mt-1"><span>{{ $sanpham->giasanpham }}</span><span class="ml-1">&nbsp;VND</span></div>
                            <div class="btn-product mt-1"><span><i class="fa-solid fa-cart-shopping"></i></span></div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <div class="btn-view-all"><a href="/loaisanpham/hatgiongraumam"><span>Xem thêm</span></a></div>
                    </div>
                    @endif
                </div>
                <div class="tab-pane fade" id="hatgiongcacloaicu" role="tabpanel"
                    tabindex="0">
                    @if($countcu==0)
    <div class="title-noti-pd"><span>Không có sản phẩm</span></div>
    @else
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1">

                        @foreach($sanphams -> where('loaisanpham', 'Hạt giống các loại củ')->take(4) as $sanpham)

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
                            <div class="price-product mt-1"><span>{{ $sanpham->giasanpham }}</span><span class="ml-1">&nbsp;VND</span></div>
                            <div class="btn-product mt-1"><span><i class="fa-solid fa-cart-shopping"></i></span></div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <div class="btn-view-all"><a href="/loaisanpham/hatgiongcacloaicu"><span>Xem thêm</span></a></div>
                    </div>
                    @endif
                </div>
                <div class="tab-pane fade" id="hatgiongcacloaihoa" role="tabpanel"
                    tabindex="0">
                    @if($counthoa==0)
    <div class="title-noti-pd"><span>Không có sản phẩm</span></div>
    @else
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1">

                        @foreach($sanphams -> where('loaisanpham', 'Hạt giống các loại hoa')->take(4) as $sanpham)

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
                            <div class="price-product mt-1"><span>{{ $sanpham->giasanpham }}</span><span class="ml-1">&nbsp;VND</span></div>
                            <div class="btn-product mt-1"><span><i class="fa-solid fa-cart-shopping"></i></span></div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <div class="btn-view-all"><a href="/loaisanpham/hatgiongcacloaihoa"><span>Xem thêm</span></a></div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-3">
    <div class="MuiGrid-root">
        <div>
            <div class="MuiTabs-root">
                <div class="MuiTabs-scrollable"
                    style="width: 99px; height: 99px; position: absolute; top: -9999px; overflow: scroll;"></div>
                <div class="MuiTabs-scroller MuiTabs-scrollable" style="margin-bottom: 0px;">
                    <div aria-label="disabled tabs example" class="MuiTabs-flexContainer" role="tablist"><button
                            class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected" tabindex="0"
                            type="button" role="tab" aria-selected="true"><span class="MuiTab-wrapper">Chậu</span><span
                                class="MuiTouchRipple-root"></span></button></div><span
                        class="jss8 jss9 MuiTabs-indicator" style="left: 0px; width: 160px;"></span>
                </div>
            </div>
        </div>
        <div style="width: 100%; min-height: 300px; margin-top: 20px;">
        @if($countchau==0)
    <div class="title-noti-pd"><span>Không có sản phẩm</span></div>
    @else
            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1">

                @foreach($sanphams -> where('loaisanpham', 'Chậu')->take(4) as $sanpham)

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
                            <div class="price-product mt-1"><span>{{ $sanpham->giasanpham }}</span><span class="ml-1">&nbsp;VND</span></div>
                            <div class="btn-product mt-1"><span><i class="fa-solid fa-cart-shopping"></i></span></div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="btn-view-all"><a href="/loaisanpham/chau"><span>Xem thêm</span></a></div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection