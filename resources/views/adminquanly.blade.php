<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <link href="{{asset('img/lo_fd3hab.jpg')}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/lo_fd3hab.jpg')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <title>Quản lý - @yield('title')</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('CSS/admin/app.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/admin/style.css')}}">
    
    <!-- END: CSS Assets-->

    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
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
</head>

<body class="py-5">
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="/quanly" class="intro-x flex items-center pl-5 pt-4" id="logoquanli">
                <img alt="Logo" class="w-6" id="logohead" src="{{asset('img/logo.a1a607a2.png')}}">
                <span class="hidden xl:block text-white text-lg ml-3">Hạt giống Cần Thơ</span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="/quanly" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title">Dashboard
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/quanly/gioithieu" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title">Giới thiệu
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/quanly/banner" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title">Quản lý banner
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/quanly/sanpham" class="side-menu">
                        <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg> </div>
                        <div class="side-menu__title">Sản phẩm</div>
                    </a>
                </li>
                <li>
                    <a class="side-menu show-submenu">
                        <div class="side-menu__icon"> <i class="fa-solid fa-house-chimney"></i></div>
                        <div class="side-menu__title">Quản lý Sản phẩm <i class="fa-solid fa-chevron-right icon-submenu"></i></div>
                    </a>
                    <ul class="drop-submenu">
                        <li><a class="side-menu" href="{{url('quanly/sanpham/hatgiong')}}"><i class="fa-regular fa-images"></i>Hạt giống</a></li>
                        <li><a class="side-menu" href="{{url('quanly/sanpham/datsach')}}"><i class="fa-solid fa-heading"></i>Đất sạch</a></li>
                        <li><a class="side-menu" href="{{url('quanly/sanpham/chau')}}"><i class="fa-brands fa-figma"></i>Chậu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/quanly/tintuc" class="side-menu">
                        <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"></path>
                                <path d="M18 14h-8"></path>
                                <path d="M15 18h-5"></path>
                                <path d="M10 6h8v4h-8V6Z"></path>
                            </svg> </div>
                        <div class="side-menu__title">Tin tức</div>
                    </a>
                </li>
                <li>
                    <a href="/quanly/kythuat" class="side-menu">
                        <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path>
                                <path d="M17 18h1"></path>
                                <path d="M12 18h1"></path>
                                <path d="M7 18h1"></path>
                            </svg> </div>
                        <div class="side-menu__title">Kỹ thuật nuôi trồng</div>
                    </a>
                </li>
                <li>
                    <a href="/quanly/lienhe" class="side-menu">
                        <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg> </div>
                        <div class="side-menu__title">Quản lý liên hệ</div>
                    </a>
                </li>
                <li>
                    <a href="/quanly/daily" class="side-menu">
                        <div class="side-menu__icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.5"></path>
                                <path d="M16 4h2a2 2 0 0 1 1.73 1"></path>
                                <path d="M18.42 9.61a2.1 2.1 0 1 1 2.97 2.97L16.95 17 13 18l.99-3.95 4.43-4.44Z"></path>
                                <path d="M8 18h1"></path>
                            </svg> </div>
                        <div class="side-menu__title">Đăng ký đại lý</div>
                    </a>
                </li>
                
                <li class="side-nav__devider my-6"></li>


            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/quanly">Hạt giống Cần Thơ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->


                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img src="/anhnguoidung/{{Auth::user()->avatar}}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary text-white">
                            <li class="p-2">
                                <div class="text-center">Chào <strong>{{Auth::user()->name}}</strong> !</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="/nguoidung/suanguoidung/{{Auth::user()->id_user;}}" class="dropdown-item hover:bg-white/5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user" class="lucide lucide-user w-4 h-4 mr-2">
                                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>Thông tin người dùng
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="/dangxuat" class="dropdown-item hover:bg-white/5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="toggle-right" data-lucide="toggle-right" class="lucide lucide-toggle-right w-4 h-4 mr-2">
                                        <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
                                        <circle cx="16" cy="12" r="3"></circle>
                                    </svg>Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
            <!-- END: Top Bar -->
            @yield('content')
        </div>
        <!-- END: Content -->
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <!-- END: Dark Mode Switcher-->

    <!-- BEGIN: JS Assets-->
    {{-- <script src="{{asset('CSS/admin/js/app.js')}}"></script> --}}
    <!-- END: JS Assets-->
    <script>
        jQuery(function($) {
            var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
            $('ul a').each(function() {
                if (this.href === path) {
                    $(this).addClass('side-menu--active');
                }
            });
        });
    </script>

    <script>
        $('.show-submenu').on('click', function(){
            $(this).toggleClass('side-menu--open');
            $(this).parent('li').find('.drop-submenu').toggleClass('side-menu__sub-open');
            $(this).find('.icon-submenu').toggleClass('active');
        });
    </script>
</body>

</html>