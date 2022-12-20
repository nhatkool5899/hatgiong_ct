@extends('trangchu')
@section('title', 'Chi tiết sản phẩm')
@section('content')
<div style="min-height: 1200px;">
    <div class="details-pd">
        <div class="wrap-content-pd">
            <h4>Chi tiết sản phẩm</h4>
            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2">
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
                    <div class="image-gallery image-gallery-using-mouse" aria-live="polite">
                        <div class="image-gallery-content bottom">
                            <div class="image-gallery-slide-wrapper bottom">
                                <div class="image-gallery-slides">
                                    <div aria-label="Go to Slide 1" tabindex="-1" class="image-gallery-slide  center "
                                        role="button" style="display: inherit; transform: translate3d(0%, 0px, 0px);">
                                        <img class="image-gallery-image" src="/anhsanpham/{{$sanpham->anhsanpham}}" alt=""
                                            srcset="" height="" width="" sizes="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="image-gallery-thumbnails-wrapper bottom thumbnails-swipe-horizontal">
                                <div class="image-gallery-thumbnails">
                                    <div class="image-gallery-thumbnails-container" aria-label="Thumbnail Navigation"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 450ms ease-out 0s;">
                                        <button type="button" tabindex="0" aria-pressed="true"
                                            aria-label="Go to Slide 1" class="image-gallery-thumbnail active"><span
                                                class="image-gallery-thumbnail-inner"><img
                                                    class="image-gallery-thumbnail-image"
                                                    src="/anhsanpham/{{$sanpham->anhsanpham}}"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-6 MuiGrid-grid-lg-6">
                    <div class="name-pd mt-2"><span>{{$sanpham->tensanpham}}</span></div>
                    <div class="price-pd mt-2"><span>Giá:&nbsp;</span><span
                            class="ml-2">{{$sanpham->giasanpham}}</span><span class="ml-1">&nbsp;VND</span></div>
                    <div class="mt-2">
                        <span class="ml-3 btn-pd">Mua hàng</span>
                    </div>
                    <div class="mt-3">
                        <div style="font-size:16px;text-align:justify;">
                            <?php $sanpham->motasanpham = html_entity_decode($sanpham->motasanpham); ?>
                            <?php echo $sanpham->motasanpham ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pb-5">
                <style>
                    .pb-5 img{
                    width: 100% !important;
                    height: auto !important;
                    }
                </style>
                <div style="font-size:16px;text-align:justify;">
                    <?php $sanpham->thongtinsanphamsanpham = html_entity_decode($sanpham->thongtinsanphamsanpham); ?>
                    <?php echo $sanpham->thongtinsanpham ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection