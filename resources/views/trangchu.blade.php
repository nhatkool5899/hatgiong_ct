<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="{{asset('img/lo_fd3hab.jpg')}}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Hạt Giống Cần Thơ">
    <link rel="apple-touch-icon" href="{{asset('img/lo_fd3hab.jpg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" charset="UTF-8"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    <title>Hạt giống Cần Thơ - @yield('title')</title>
    <link href="{{asset('CSS/client/2.7c550aa5.chunk.css')}}" rel="stylesheet">
    <link href="{{asset('CSS/client/main.4a6ccfd0.chunk.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('CSS/client/style.css')}}" />

</head>

<body>

    <script>
        $(function () {
            pageUrl = location.pathname;
            $('ul li a').each(function () {
                link = $(this);
                if (link.attr("href") == pageUrl) {
                    link.parent().addClass("active");
                }
            });
        });
    </script>

    <style>
        /* Chrome, Safari, Edge, Opera */
        input#giasanpham::-webkit-outer-spin-button,
        input#giasanpham::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input#giasanpham[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    <div class="allButFooter">


        <div id="root">
            <div id="topnav">
                <div class="row">
                    <div class="col-sm-4" id="col-center">
                        <button type="button" class="btn" aria-label="offcanvasButton-topNav" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvastopNav" aria-controls="offcanvastopNav">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false" viewBox="0 0 24 24"
                                aria-hidden="true" style="color: rgb(13, 135, 69);">
                                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                            </svg> </button>
                    </div>
                    <div class="col-sm-4" id="col-center">
                        <div class="header-logo"><a href="/"><img src="{{asset('img/logo.a1a607a2.png')}}" alt=""
                                    width="100%"></a></div>
                    </div>
                </div>
            </div>


            <div class="MuiGrid-root">
                <div class="MuiGrid-root">
                    <div class="MuiGrid-root" id="headerDesktop">
                        <div class="MuiGrid-root" id="header-top">
                            <div class="wrap-body">
                                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2">
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-lg-2">
                                        <div class="header-logo"><a href="/"><img
                                                    src="{{asset('img/logo.a1a607a2.png')}}" alt="" width="100%"></a>
                                        </div>
                                    </div>
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-lg-8">
                                        <form class="MuiPaper-root jss4 MuiPaper-elevation1 MuiPaper-rounded"
                                            action="/timkiem" method="GET">
                                            <div class="MuiInputBase-root jss5"><input
                                                    placeholder="Tìm sản phẩm bạn mong muốn" type="text"
                                                    aria-label="Tìm sản phẩm bạn mong muốn" class="MuiInputBase-input"
                                                    name="tu-khoa"></div>
                                            <hr class="MuiDivider-root jss7 MuiDivider-vertical"><button
                                                class="MuiButtonBase-root MuiIconButton-root jss6 MuiIconButton-colorPrimary"
                                                tabindex="0" type="submit" aria-label="directions"><span
                                                    class="MuiIconButton-label"><svg class="MuiSvgIcon-root"
                                                        focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                        <path
                                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                        </path>
                                                    </svg></span><span class="MuiTouchRipple-root"></span></button>
                                        </form>
                                    </div>
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-lg-2">
                                        <div class=" float-right mt-4" style="font-size: 18px; font-weight: 500;">
                                            <div><span>Phòng kinh doanh</span></div>
                                            <div><span>0907 888 428</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root" id="header">
                            <script>
                                window.onscroll = function () {
                                    myFunction()
                                };

                                var header = document.getElementById("header");
                                var sticky = header.offsetTop;

                                function myFunction() {
                                    if (window.pageYOffset >= sticky) {
                                        header.classList.add("sticky")
                                    } else {
                                        header.classList.remove("sticky");
                                    }
                                }
                            </script>


                            <div class="wrap-body">
                                <ul class="header-option">
                                    <li class="menu-p"><a href="#">DANH MỤC SẢN PHẨM <svg class="MuiSvgIcon-root"
                                                focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                            </svg></a>
                                        <ul class="sub-menu-p">
                                            <li class="sub-menu-p-item">
                                                <a href="/loaisanpham/datsachphansach">
                                                    <div><span>Đất sạch - phân sạch</span> </div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-p-item">
                                                <div><span>Hạt giống</span> <svg class="MuiSvgIcon-root"
                                                        focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                                                        style="float: right;">
                                                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                                                    </svg></div>
                                                <ul class="sub2-menu-p">
                                                    <a href="/loaisanpham/hatgiongcayantrai">
                                                        <li>
                                                            <div><span>Hạt giống cây ăn trái</span></div>
                                                        </li>
                                                    </a>
                                                    <a href="/loaisanpham/hatgiongrau">
                                                        <li>
                                                            <div><span>Hạt giống rau</span></div>
                                                        </li>
                                                    </a>
                                                    <a href="/loaisanpham/hatgiongraumam">
                                                        <li>
                                                            <div><span>Hạt giống rau mầm</span></div>
                                                        </li>
                                                    </a>
                                                    <a href="/loaisanpham/hatgiongcacloaicu">
                                                        <li>
                                                            <div><span>Hạt giống các loại củ</span></div>
                                                        </li>
                                                    </a>
                                                    <a href="/loaisanpham/hatgiongcacloaihoa">
                                                        <li>
                                                            <div><span>Hạt giống các loại hoa</span></div>
                                                        </li>
                                                    </a>
                                                </ul>
                                            </li>
                                            <a href="/loaisanpham/chau">
                                                <li class="sub-menu-p-item">
                                                    <div><span>Chậu</span> </div>
                                                </li>
                                            </a>
                                        </ul>
                                    </li>
                                    <li><a href="/">TRANG CHỦ</a></li>
                                    <li><a href="/gioithieu">GIỚI THIỆU</a></li>
                                    <li><a href="/tintuc">TIN TỨC</a></li>
                                    <li><a href="/kythuatnuoitrong">KỸ THUẬT NUÔI TRỒNG</a></li>
                                    <li><a href="/hethongcuahang">HỆ THỐNG CỬA HÀNG</a></li>
                                    <li><a href="/lienhe">LIÊN HỆ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-body content-body mt-3">
                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3">
                    <div class="MuiGrid-root banner-small MuiGrid-item MuiGrid-grid-xs-3 MuiGrid-grid-md-3 MuiGrid-grid-lg-3"
                        id="sideNav">
                        <div class="MuiGrid-root">
                            <div class="wrap-product-category">
                                <div class="product-category">
                                    <a href="/loaisanpham/datsachphansach">
                                        <div class="main-category"><span class="">Đất sạch - phân sạch</span></div>
                                    </a>
                                </div>
                                <div class="product-category">
                                    <a href="/loaisanpham/hatgiong">
                                        <div class="main-category"><span class="">Hạt giống</span></div>
                                    </a>
                                    <a href="/loaisanpham/hatgiongcayantrai">
                                        <div class="sub-category"><span class="">Hạt giống cây ăn trái</span></div>
                                    </a>
                                    <a href="/loaisanpham/hatgiongrau">
                                        <div class="sub-category"><span class="">Hạt giống rau</span></div>
                                    </a>
                                    <a href="/loaisanpham/hatgiongraumam">
                                        <div class="sub-category"><span class="">Hạt giống rau mầm</span></div>
                                    </a>
                                    <a href="/loaisanpham/hatgiongcacloaicu">
                                        <div class="sub-category"><span class="">Hạt giống các loại củ</span></div>
                                    </a>
                                    <a href="/loaisanpham/hatgiongcacloaihoa">
                                        <div class="sub-category"><span class="">Hạt giống các loại hoa</span></div>
                                    </a>
                                </div>
                                <div class="product-category">
                                    <a href="/loaisanpham/chau">
                                        <div class="main-category"><span class="">Chậu</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="https://facebook.com/profile.php?id=100075826703162">
                            <div class="MuiGrid-root">
                                <div class="banner-small">
                                    <div
                                        style="background-color: rgb(255, 255, 255); position: relative; width: 100%; height: 100%; object-fit: cover;">
                                        <img src="{{asset('img/b9z5yzmymvzqjvgjhyh9.png')}}"
                                            style="width: 100%; height: 100%; position: absolute; object-fit: cover; top: 0px; left: 0px; opacity: 1; transition: filterBrightness 2250ms cubic-bezier(0.4, 0, 0.2, 1) 0s, filterSaturate 3000ms cubic-bezier(0.4, 0, 0.2, 1) 0s, opacity 1500ms cubic-bezier(0.4, 0, 0.2, 1) 0s; border-radius: 10px;">
                                        <div
                                            style="width: 100%; height: 100%; position: absolute; top: 0px; left: 0px; display: flex; align-items: center; justify-content: center; pointer-events: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/daily">
                            <div class="MuiGrid-root">
                                <div class="banner-small">
                                    <div
                                        style="background-color: rgb(255, 255, 255); position: relative; width: 100%; height: 100%; object-fit: cover;">
                                        <img src="{{asset('img/b4.44243143.png')}}"
                                            style="width: 100%; height: 100%; position: absolute; object-fit: cover; top: 0px; left: 0px; opacity: 1; transition: filterBrightness 2250ms cubic-bezier(0.4, 0, 0.2, 1) 0s, filterSaturate 3000ms cubic-bezier(0.4, 0, 0.2, 1) 0s, opacity 1500ms cubic-bezier(0.4, 0, 0.2, 1) 0s; border-radius: 10px;">
                                        <div
                                            style="width: 100%; height: 100%; position: absolute; top: 0px; left: 0px; display: flex; align-items: center; justify-content: center; pointer-events: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-9 MuiGrid-grid-lg-9">
                        @yield('content')
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="btn-group dropup" id="mybutton">
        <button type="button" class="btn btn-success dropdown-toggle btn-circle btn-xl caret-off"
            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-headset fa-xl"></i></button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="sms:0907888428"><img src="{{asset('img/sms.66310d84.png')}}" width="26%"
                        style="padding-right: 10px;">SMS</a></li>
            <li><a class="dropdown-item" href="tel:0907888428"><img src="{{asset('img/phone.7943f54a.png')}}"
                        width="26%" style="padding-right: 10px;">Gọi</a></li>
            <li><a class="dropdown-item" href="mailto:hatgiongcantho82@gmail.com"><img
                        src="{{asset('img/email.a49e0158.png')}}" width="26%" style="padding-right: 10px;">Email</a>
            </li>
            <li><a class="dropdown-item" href="https://www.messenger.com/t/105118041925994/" target="_blank"><img
                        src="{{asset('img/messenger.f11aec80.png')}}" width="26%"
                        style="padding-right: 10px;">Messenger</a></li>
            <li><a class="dropdown-item" href="https://zalo.me/0907888428" target="_blank"><img
                        src="{{asset('img/zalo.0bdcaa0c.png')}}" width="26%" style="padding-right: 10px;">Zalo</a></li>




        </ul>
    </div>
    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvastopNav" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <div class="header-logo">
                    <a href="/"><img src="{{asset('img/logo.a1a607a2.png')}}" alt="" width="150%"></a>
                </div>
            </h5>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gioithieu">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tintuc">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kythuatnuoitrong">Kỹ thuật nuôi trồng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hethongcuahang">Hệ thống cửa hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lienhe">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tatcasanpham">Sản phẩm</a>
                </li>
            </ul>
        </div>
    </div>


</body>
<footer class="text-center footer">
    <section class="">
        <div class="container text-center text-md-start mt-3">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4" style="color:#f5ec08 ;">
                        SHOP HẠT GIỐNG CẦN THƠ
                    </h6>
                    <p><i class="fa-solid fa-house"></i>381N15 tổ 6, Khu vực 2, đường Trần Nam Phú, P. An Khánh, Q. Ninh
                        Kiêu, TP. Cần Thơ</p>
                    <p><i class="fas fa-phone"></i>0907 888 428</p>
                    <p>
                        <i class="fas fa-envelope"></i>hatgiongcantho82@gmail.com
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4" style="color:#f5ec08 ;">Danh mục</h6>
                    <p><a href="/lienhe">Liên hệ</a></p>
                    <p><a href="/tintuc">Tin tức</a></p>
                    <p class="social-icon">
                        <a
                            href="https://www.facebook.com/H%E1%BA%A1t-Gi%E1%BB%91ng-C%E1%BA%A7n-Th%C6%A1-105118041925994"><img
                                src="{{asset('img/facebook.png')}}" alt="" width="16%"></a>
                        <img src="{{asset('img/logo.6d33586b.jpg')}}" alt="" width="16%" class="ml-2"
                            style="border-radius: 6px;"></li>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>
<script>
    $('p.small.text-muted').parent('div').addClass('paginationtextDiv');

$('ul.pagination').parent('div').addClass('paginationDiv');
</script>
</html>