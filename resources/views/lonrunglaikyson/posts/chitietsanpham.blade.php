@extends('lonrunglaikyson.views.layouts.trangchu')
@section('content')
@if($chitiet)
<div class="breadcrumb">
    <div class="container">

        <div class="c-bread">
            <ul class="list-unstyled">
                <li style="padding-left:0"><a href="index.html">
                        <h1>Trang chủ</h1>
                    </a></li>

                <li><a href="lon-viet-nam.html">
                        <h1>ĐẶC SẢN LỢN NGUYÊN CON</h1>
                    </a></li>

            </ul>
        </div>

    </div>
</div>



<div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="/lon-moc-ham">
    <meta itemprop="image" content="{!!$chitiet->content}">
    <meta itemprop="shop-currency" content="">
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <div class="row">
                            <div class="product-view">
                                <div class="product-essential">
                                    <div class="product-img-box col-md-5 col-sm-6 col-xs-12 col-lg-5 wow bounceInLeft animated">
                                        <div class="product-image">


                                            <div class="large-image">
                                                <a href="/chi-tiet-san-pham/{{$chitiet->slug}}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:30"> <img src="/storage/{{$chitiet->thumbnail}}"> </a>
                                            </div>

                                            


                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="product-shop col-md-7 col-sm-6 col-xs-12 col-lg-7 wow bounceInRight animated">

                                        <link itemprop="availability" href="http://schema.org/InStock">

                                        <div class="product-name">
                                            <h1>Lợn Móc Hàm</h1>
                                        </div>
                                        <div class="price-block">
                                            <div class="price-box">


                                                <a href="/chi-tiet-san-pham/{{$chitiet->slug}}"><span class="price"><i><b>{{$chitiet->price}}</b></i> </span></a>



                                            </div>
                                        </div>
                                        
                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <form action="https://lonmuongxin.com/cart/add" method="post" enctype="multipart/form-data" id="add-to-cart-form">



                                                    <input type="hidden" name="variantId" value="16058894" />


                                                    <ul class="hotline">
                                                        <li><a class="btn btn-small" href="/chi-tiet-san-pham/{{$chitiet->slug}}"><i class="fa fa-map-marker" aria-hidden="true"></i>Xem Hệ Thống Cửa Hàng</a></li>

                                                        <li class="l">

                                                            <span>Hotline : <a href="tel:0789330330"><b>0789330330</b></a></span>


                                                        </li>
                                                        <li class="r"><a href="#">Miễn phí vận chuyển trên toàn quốc</a></li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Place this tag in your head or just before your close body tag. -->
                                        <script src="../apis.google.com/js/platform.js" async defer></script>
                                        <div class="fb">
                                            <!-- Place this tag where you want the +1 button to render. -->
                                            <div class="g-plusone" data-size="medium"></div>
                                            <div class="fb-like" data-href="https://www.facebook.com/bizweb15s/?fref=ts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                            <!-- Place this tag where you want the share button to render. -->
                                        </div>

                                        <script>
                                            $("div.fb-like").attr('data-href', window.location.href)
                                        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-collateral wow bounceInUp animated">
                            <div class="col-sm-12">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"> <a href="#product_tabs_description" data-toggle="tab">Thông tin sản phẩm </a> </li>
                                    
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="product_tabs_description">
                                        <div class="std">
                                            <h3>Lợn Móc Hàm: Lợn Mán | Lợn Mường |&nbsp; Lợn Rừng</h3>
                                            <p>&nbsp; +&nbsp; &nbsp; &nbsp; &nbsp; Sản phẩm chỉ áp dụng với hình thức thanh toán trả trước &gt;30% giá trị sản phẩm.</p>
                                            <p><em><strong>&nbsp; +&nbsp; &nbsp; &nbsp; &nbsp; Giao hàng miễn phí&nbsp;trong 2h kể từ khi nhận đơn hàng.&nbsp;</strong></em></p>
                                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Sản phẩm đóng thùng xốp kín đáo, sạch sẽ, trước khi vận chuyển tới Quý Khách.</p>
                                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Thịt tươi ngon, đảm bảo an toàn vệ sinh thực phẩm.</p>
                                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Mang đến nhiều món ăn hấp dẫn, giàu dinh dưỡng.</p>
                                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Lượng thịt nhiều, săn chắc,&nbsp; thơm ngon.</p>
                                            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Sản phẩm này có ưu đãi đặc biệt hoặc nằm trong danh sách sản phẩm và dịch vụ hạn chế đổi trả .</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="product_tabs_custom">
                                    </div>

                                </div>
                                <div class="dshd p">
                                    <a class="btn social-sharing btn-facebook r" href="javascript:void(0);" data-type="facebook">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </a>
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('.btn.social-sharing').on('click', function() {
                                                type = $(this).attr('data-type');
                                                if (type.length) {
                                                    switch (type) {

                                                        case 'facebook':
                                                            window.open('http://www.facebook.com/sharer/sharer.php?u=http://lonmuongxin.com/lon-moc-ham', 'sharer', 'toolbar=0,status=0,width=660,height=445');
                                                            break;

                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- Place this tag in your head or just before your close body tag. -->
                                    <script src="../apis.google.com/js/platform.js" async defer></script>
                                    <div class="fb">
                                        <!-- Place this tag where you want the +1 button to render. -->
                                        <div class="g-plusone" data-size="medium"></div>
                                        <div class="fb-like" data-href="https://www.facebook.com/bizweb15s/?fref=ts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                        <!-- Place this tag where you want the share button to render. -->
                                    </div>

                                </div>
                                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>

                                <script>
                                    $("div.fb-comments").attr('data-href', window.location.href)
                                </script>
                                <div class="new_title center">
                                    <h2>Sản phẩm khác</h2>
                                </div>


                                <div class="related-products">
                                    <div class="shop-variant-two clearfix row">

                                        @foreach($sanphamlienquan as $splq)
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <div class="item item-product">



                                                <div class="col-item">

                                                    <!-- <div class="sale-label sale-top-right"></div> -->

                                                    <div class="item-inner">
                                                        <div class="product-wrapper">
                                                            <div class="thumb-wrapper">
                                                                <a href="/chi-tiet-san-pham/{{$splq->slug}}"><img src="/storage/{{$splq->thumbnail}}" class="img-fix" alt="{{$splq->title}}"></a>
                                                            </div>

                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <h3> <a href="/chi-tiet-san-pham/{{$splq->slug}}" title="{{$splq->title}}">{{$splq->title}}</a> </h3>
                                                                </div>
                                                                <div class="item-content">

                                                                    <div class="item-price">

                                                                        <div class="price-box">

                                                                        
                                                                            <p class="special-price">
                                                                                <span class="price-label">Giá</span>
                                                                                <span class="price">{{$splq->price}}₫</span>
                                                                            </p>


                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-right sidebar col-md-3 hidden-sm hidden-xs">

                        <div class="col-siderbar-right">
                            <ul class="col-siderbar-right-ul">
                                <li class="siderbar-header">
                                    <h2 style="margin:0">Lợn Rừng Lai cam kết</h2>
                                </li>

                                <li class="siderbar-content">
                                    <a href="#"><img id="m0" src="../bizweb.dktcdn.net/100/150/388/themes/517622/assets/t1188b8.png?1672627251709" alt="Phong cách"><b>Chất Lượng</b>Quốc tế</a>
                                </li>

                                <li class="siderbar-content">
                                    <a href="#"><img id="m1" src="../bizweb.dktcdn.net/100/150/388/themes/517622/assets/t2188b8.png?1672627251709" alt="Chất liệu"><b>Dịch Vụ</b>Chuyên nghiệp</a>
                                </li>

                                <li class="siderbar-content">
                                    <a href="#"><img id="m2" src="../bizweb.dktcdn.net/100/150/388/themes/517622/assets/t3188b8.png?1672627251709" alt="Dịch vụ"><b>Miễn Phí</b>Vận chuyển</a>
                                </li>

                                <li class="siderbar-content" \>
                                    <a href="#"><img id="m3" src="../bizweb.dktcdn.net/100/150/388/themes/517622/assets/t4188b8.png?1672627251709" alt="Showroom"><b>Showroom</b>Toàn quốc</a>
                                </li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endif
@endsection