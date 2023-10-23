@extends('layout.trangchu')
@section('content')
@if($xemchitiet)
<div class="shop-page-title product-page-title dark  featured-title page-title ">

    <div class="page-title-bg fill">
        <div class="title-bg fill bg-fill" data-parallax-fade="true" data-parallax="-2" data-parallax-background data-parallax-container=".page-title"></div>
        <div class="title-overlay fill"></div>
    </div>

    <div class="page-title-inner flex-row container medium-flex-wrap flex-has-center">
        <div class="flex-col">
            &nbsp;
        </div>
        <div class="flex-col flex-center text-center">

            <h1 class="product-title product_title entry-title">{{$xemchitiet->title}}</h1>

            <div class="is-small">
                <nav class="woocommerce-breadcrumb breadcrumbs"><a href="/">Trang chủ</a> <span class="divider">&#47;</span> <a >{{$xemchitiet->title}}
                        </a></nav>
            </div>
        </div><!-- .flex-center -->
        <div class="flex-col flex-right nav-right text-right medium-text-center">
            
        </div>
    </div><!-- flex-row -->
</div><!-- .page-title -->
<main id="main" class="">

    <div class="shop-container">

        <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
        </div><!-- /.container -->
        <div id="product-201" class="post-201 product type-product status-publish has-post-thumbnail product_cat-mat-ong-gung product_cat-mat-ong-hoa-ca-phe product_cat-mat-ong-hoa-nhan first instock sale shipping-taxable purchasable product-type-simple">
            <div class="product-container">

                <div class="product-main">
                    <div class="row content-row mb-0">

                        <div class="product-gallery large-6 col">

                            <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">

                               
                                <div class="image-tools absolute top show-on-hover right z-3">
                                </div>

                                <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half" data-flickity-options='{
                "cellAlign": "center",
                "wrapAround": true,
                "autoPlay": false,
                "prevNextButtons":true,
                "adaptiveHeight": true,
                "imagesLoaded": true,
                "lazyLoad": 1,
                "dragThreshold" : 15,
                "pageDots": false,
                "rightToLeft": false       }'>
                                    <!-- <div><a href=""><img width="300" height="268" src="" alt="" title="14709839351284-cach-nhan-biet-mat-ong-that-tranh-hang-gia-giup-ban-co-the-mua-mat-ong-nguyen-chat-1008-20160405-11042826" data-caption="" data-src="http://matong.langsonweb.com/wp-content/uploads/2019/01/14709839351284-cach-nhan-biet-mat-ong-that-tranh-hang-gia-giup-ban-co-the-mua-mat-ong-nguyen-chat-1008-20160405-11042826.jpg" data-large_image="http://matong.langsonweb.com/wp-content/uploads/2019/01/14709839351284-cach-nhan-biet-mat-ong-that-tranh-hang-gia-giup-ban-co-the-mua-mat-ong-nguyen-chat-1008-20160405-11042826.jpg" data-large_image_width="500" data-large_image_height="447" srcset="http://matong.langsonweb.com/wp-content/uploads/2019/01/14709839351284-cach-nhan-biet-mat-ong-that-tranh-hang-gia-giup-ban-co-the-mua-mat-ong-nguyen-chat-1008-20160405-11042826-300x268.jpg 300w, http://matong.langsonweb.com/wp-content/uploads/2019/01/14709839351284-cach-nhan-biet-mat-ong-that-tranh-hang-gia-giup-ban-co-the-mua-mat-ong-nguyen-chat-1008-20160405-11042826.jpg 500w" sizes="(max-width: 300px) 100vw, 300px" /></a></div>
                                    <div data-thumb="" class="woocommerce-product-gallery__image slide"><a href=""><img width="241" height="270" src="" class="skip-lazy" alt="" title="thumbnail (3)" data-caption="" data-src="http://matong.langsonweb.com/wp-content/uploads/2019/01/thumbnail-3.jpg" data-large_image="pg" data-large_image_width="241" data-large_image_height="270" /></a></div>
                                    <div data-thumb="" class="woocommerce-product-gallery__image slide"><a href=""><img width="241" height="270" src="" class="skip-lazy" alt="" title="thumbnail (2)" data-caption="" data-src="" data-large_image="" data-large_image_width="241" data-large_image_height="270" /></a></div>
                                    <div data-thumb="" class="woocommerce-product-gallery__image slide"><a href=""><img width="241" height="270" src="" class="skip-lazy" alt="" title="thumbnail (1)" data-caption="" data-src="" data-large_image="" data-large_image_width="241" data-large_image_height="270" /></a></div> -->
                                    <div data-thumb="" class="woocommerce-product-gallery__image slide">
                                        <a href="">
                                            @if($xemchitiet)
                                            <img width="241" height="270" src="/storage/{{$xemchitiet->thumbnail}}" class="skip-lazy" alt="" title="thumbnail" data-caption="" data-src="" data-large_image="" data-large_image_width="241" data-large_image_height="270" />
                                            @endif
                                        </a>
                                    </div>
                                </figure>

                                <div class="image-tools absolute bottom left z-3">
                                    <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="Zoom">
                                        <i class="icon-expand"></i> </a>
                                </div>
                            </div>

                            
                        </div>

                        <div class="product-info summary col-fit col entry-summary product-summary">

                            <div class="price-wrapper">
                                <p class="price product-page-price price-on-sale">
                                @if($xemchitiet->masp != 0 && $xemchitiet->price != 0)
                                    <del><span class="woocommerce-Price-amount amount">{{$xemchitiet->masp}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del>
                                    <ins><span class="woocommerce-Price-amount amount">{{$xemchitiet->price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
                                @endif
                                </p>
                            </div>
                            <div style="display: block;
  	display: -webkit-box;
  	height: 16px*1.5*4;
  	font-size: 16px;
  	line-height: 1.3;
  	-webkit-line-clamp: 3;  /* số dòng hiển thị */
  	-webkit-box-orient: vertical;
  	overflow: hidden;
  	text-overflow: ellipsis;
  	margin-top:10px;" class="product-short-description">
                                <p>{!! $xemchitiet->content !!}</p>
                            </div>
                        <!-- </div> -->


                            


                            <div class="thong-bao" style="margin-top: 25px;">
                                <div class="top">Gọi ngay: 0986.989.626 để nhận giá tốt nhất</div>
                                
                            </div> 
                            
                            
                           
                        </div><!-- .summary -->

                        <div id="product-sidebar" class="mfp-hide">
                            <div class="sidebar-inner">
                                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
                                    <div class="is-divider small"></div>
                                    <ul class="product-categories">
                                        <li class="cat-item cat-item-20"><a href="">Mật ong chúa
                                                tươi</a> <span class="count">(3)</span></li>
                                        <li class="cat-item cat-item-19 current-cat"><a href="">Mật ong gừng</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="cat-item cat-item-17"><a href="">Mật ong hoa
                                                cà phê</a> <span class="count">(4)</span></li>
                                        <li class="cat-item cat-item-18"><a href="">Mật ong hoa
                                                nhãn</a> <span class="count">(3)</span></li>
                                        <li class="cat-item cat-item-15"><a href="">Mật ong rừng</a>
                                            <span class="count">(2)</span>
                                        </li>
                                        <li class="cat-item cat-item-16"><a href="">Mật ong sữa
                                                chúa</a> <span class="count">(1)</span></li>
                                    </ul>
                                </aside>
                            </div><!-- .sidebar-inner -->
                        </div>

                    </div><!-- .row -->
                </div><!-- .product-main -->



                <div class="product-footer" style="margin-bottom: 20px;">
                    <div class="container">

                        <div class="woocommerce-tabs container tabbed-content">
                            <ul class="product-tabs small-nav-collapse tabs nav nav-uppercase nav-tabs nav-normal nav-left">
                                <li class="description_tab  active">
                                    <a href="#tab-description">Mô tả</a>
                                </li>
                                
                            </ul>
                            <div class="tab-panels">

                                <div class="panel entry-content active" id="tab-description">

                                    {!!$xemchitiet->content!!}
                                    <!-- <div><span style="font-family: Helvetica;">Vào tháng 03 hàng năm tại các khu
                                            vực miền tây và miền bắc nước ta là thời điểm những trang trại nhãn
                                            bắt đầu nở hoa đây cũng là thời điềm những nhà nuôi ong ở các nơi sẽ
                                            tiến hành di chuyển đàn ong đến thu hoạch mật ong hoa nhãn. Các chú
                                            ong khi được đưa đến đây sẽ làm việc chăm chỉ ngày đêm. Ban ngày đi
                                            hút mật đưa về tổ, ban đêm tiến hành luyện mật qua một quá trình
                                            dài. Khi mật đủ chín, chủ trại nuôi ong của Hilobee mới tiến hành
                                            quay lấy mật. Đặc thù hoa nhãn có hương vị rất đặc trưng và dễ nhận
                                            biết.</span></div>
                                    <div><span style="font-family: Helvetica;"> </span></div>
                                    <h2><b><span style="color: #000000; font-family: Helvetica;">2. Đặc điểm
                                                nhận biết mật ong hoa nhãn của Hilobee</span></b></h2>
                                    <div><span style="font-family: Helvetica;">Mật ong hoa nhãn Hilobee chỉ được
                                            thu hoạch khi đã trải qua quá trình luyện đủ chín của các chú ong
                                            thợ và cho ra chất lượng mật tốt và đậm đặc nhất hoàn toàn khác biệt
                                            so với các loại mật ong khác trên thị trường hiện nay.</span></div>
                                    <div><span style="font-family: Helvetica;">Hàm lượng nước trong mật ong
                                            &lt;=19% &#8211; đây là tiêu chuẩn quốc tế đủ điều kiện xuất khẩu
                                            sang các nước Châu Âu, Mỹ, Trung Đông, Nhật Bản, Hàn
                                            Quốc&#8230;</span></div>
                                    <div><span style="font-family: Helvetica;">Mật ong hoa nhãn Hilobee có vị
                                            ngọt dịu và mùi hương đặc trưng của hoa nhãn. Có màu vàng sánh đặc
                                            trưng.</span></div>
                                    <div><span style="font-family: Helvetica;"> </span></div>
                                    <h2><b><span style="color: #000000; font-family: Helvetica;">3. Công dụng
                                                của mật ong hoa nhãn Hilobee</span></b></h2>
                                    <div><span style="font-family: Helvetica;">Thành phần trong mật ong hoa nhãn
                                            Hilobee có rất nhiều loại Vitamin và axit amin quan trọng như A, B1,
                                            B2, tiền tố Acid Folic&#8230; Việc sử dụng mật ong hàng ngày giúp
                                            cho chúng ta có một cơ thể khoẻ mạnh, tăng cường sức đề kháng. Giúp
                                            ăn ngon miệng, ngủ sâu giấc, có một làn da hồng hào, tươi
                                            sáng.</span></div>
                                    <div><span style="font-family: Helvetica;">Ngoài ra, việc sử dụng mật ong -->
                                            <!-- hoa nhãn Hilobee giúp trị các loại bệnh liên quan đến đường ruột,
                                            tiêu hoá, đặc biệt là dạ dày khi kết hợp cùng với tinh bột
                                            nghệ.</span></div> -->
                                </div>


                                

                            </div><!-- .tab-panels -->
                        </div><!-- .tabbed-content -->


                       

                    </div><!-- container -->
                </div><!-- product-footer -->
            </div><!-- .product-container -->
            <div class="devvn-popup-quickbuy" data-popup="popup-quickbuy" id="popup_content_201">
                <div class="devvn-popup-inner">
                    <div class="devvn-popup-title">
                        <span>Đặt mua Mật Ong Hoa Nhãn loại 1 lit</span>
                        <button type="button" class="devvn-popup-close"></button>
                    </div>
                    <div class="devvn-popup-content devvn-popup-content_201 ">
                        <div class="devvn-popup-content-left ">
                            <div class="devvn-popup-prod">
                                <div class="devvn-popup-img"><img src="../../wp-content/uploads/2019/01/14709839351284-cach-nhan-biet-mat-ong-that-tranh-hang-gia-giup-ban-co-the-mua-mat-ong-nguyen-chat-1008-20160405-11042826-100x100.jpg" alt="" /></div>
                                <div class="devvn-popup-info">
                                    <span class="devvn_title">Mật Ong Hoa Nhãn loại 1 lit</span>
                                    <span class="devvn_price"><del><span class="woocommerce-Price-amount amount">650.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del>
                                        <ins><span class="woocommerce-Price-amount amount">620.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
                                </div>
                            </div>
                            <div class="devvn_prod_variable" data-simpleprice="620000">


                                <form class="cart" action="http://matong.langsonweb.com/san-pham/mat-ong-hoa-nhan-tieu-chuan-chau-au/" method="post" enctype='multipart/form-data'>

                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus button is-form"> <label class="screen-reader-text" for="quantity_62b678615b7d1">Số
                                            lượng</label>
                                        <input type="number" id="quantity_62b678615b7d1" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Mật Ong Hoa Nhãn loại 1 lit số lượng" />
                                        <input type="button" value="+" class="plus button is-form">
                                    </div>

                                    <button type="submit" name="add-to-cart" value="201" class="single_add_to_cart_button button alt">Mua ngay</button>

                                </form>


                            </div>
                            Bạn vui lòng nhập đúng số điện thoại để chúng tôi sẽ gọi xác nhận đơn hàng trước khi
                            giao hàng. Xin cảm ơn!
                        </div>
                        <div class="devvn-popup-content-right">
                            <form class="devvn_cusstom_info" id="devvn_cusstom_info" method="post">
                                <div class="popup-customer-info">
                                    <div class="popup-customer-info-title">Thông tin người mua</div>
                                    <div class="popup-customer-info-group popup-customer-info-radio">
                                        <label>
                                            <input type="radio" name="customer-gender" value="1" checked />
                                            <span>Anh</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="customer-gender" value="2" />
                                            <span>Chị</span>
                                        </label>
                                    </div>
                                    <div class="popup-customer-info-group">
                                        <div class="popup-customer-info-item-2">
                                            <input type="text" class="customer-name" name="customer-name" placeholder="Họ và tên">
                                        </div>
                                        <div class="popup-customer-info-item-2">
                                            <input type="text" class="customer-phone" name="customer-phone" placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="popup-customer-info-group">
                                        <div class="popup-customer-info-item-1">
                                            <input type="text" class="customer-email" name="customer-email" data-required="false" placeholder="Địa chỉ email (Không bắt buộc)">
                                        </div>
                                    </div>
                                    <div class="popup-customer-info-group">
                                        <div class="popup-customer-info-item-1">
                                            <textarea class="customer-address" name="customer-address" placeholder="Địa chỉ nhận hàng (Không bắt buộc)"></textarea>
                                        </div>
                                    </div>
                                    <div class="popup-customer-info-group">
                                        <div class="popup-customer-info-item-1">
                                            <textarea class="order-note" name="order-note" placeholder="Ghi chú đơn hàng (Không bắt buộc)"></textarea>
                                        </div>
                                    </div>
                                    <div class="popup-customer-info-group">
                                        <div class="popup-customer-info-item-1 popup_quickbuy_shipping">
                                            <div class="popup_quickbuy_shipping_title">Tổng:</div>
                                            <div class="popup_quickbuy_total_calc"></div>
                                        </div>
                                    </div>
                                    <div class="popup-customer-info-group">
                                        <div class="popup-customer-info-item-1">
                                            <button type="button" class="devvn-order-btn">Đặt hàng ngay</button>
                                        </div>
                                    </div>
                                    <div class="popup-customer-info-group">
                                        <div class="popup-customer-info-item-1">
                                            <div class="devvn_quickbuy_mess"></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="prod_id" id="prod_id" value="201">
                                <input type="hidden" name="prod_nonce" id="prod_nonce" value="">
                                <input type="hidden" name="enable_ship" id="enable_ship" value="">
                                <input name="require_address" id="require_address" type="hidden" value="0" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- shop container -->

</main><!-- #main -->
@endif




@endsection