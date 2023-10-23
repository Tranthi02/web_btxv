@extends('ocbuouden.views.layouts.trangchu')
@section('content')
@if($chitietsanpham)
<main id="main" class="">
    <div class="shop-container">
        <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
        </div>
        <div id="product-1151" class="product type-product post-1151 status-publish first instock product_cat-oc-1-tuan-tuoi product_cat-oc-giong has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
            <div class="row content-row row-divided row-large row-reverse">
                <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar">
                    <div class="hide-for-off-canvas" style="width: 100%">
                        <ul class="next-prev-thumbs is-small nav-right text-right">
                            <li class="prod-dropdown has-dropdown">
                                <a href="/chi-tiet-san-pham/{{$chitietsanpham->slug}}" rel="next" class="button icon is-outline circle">
                                    <i class="icon-angle-left"></i>
                                </a>
                                <div class="nav-dropdown">
                                    <a title="{{$chitietsanpham->title}}" href="/chi-tiet-san-pham/{{$chitietsanpham->slug}}">
                                        <noscript><img style="width:100px; height:100px;" src="/storage/{{$chitietsanpham->thumbnail}}" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" srcset="
                                        /storage/{{$chitietsanpham->thumbnail}} 100w,
                                        /storage/{{$chitietsanpham->thumbnail}} 150w,
                                        /storage/{{$chitietsanpham->thumbnail}} 300w
                              " sizes="(max-width: 100px) 100vw, 100px" /></noscript><img style="width:100px; height:100px;" src="/storage/{{$chitietsanpham->thumbnail}}" data-src="/storage/{{$chitietsanpham->thumbnail}}" class="lazyload attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" data-srcset="" data-sizes="(max-width: 100px) 100vw, 100px" /></a>
                                </div>
                            </li>
                            <li class="prod-dropdown has-dropdown">
                                <a href="/chi-tiet-san-pham/{{$chitietsanpham->slug}}" rel="next" class="button icon is-outline circle">
                                    <i class="icon-angle-right"></i>
                                </a>
                                <div class="nav-dropdown">
                                    <a title="Trứng Ốc Bươu Đen Giống" href="/chi-tiet-san-pham/{{$chitietsanpham->slug}}">
                                        <noscript><img style="width:100px; height:100px;" src="/storage/{{$chitietsanpham->thumbnail}}" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" loading="lazy" srcset="
                                        /storage/{{$chitietsanpham->thumbnail}} 100w,
                                        /storage/{{$chitietsanpham->thumbnail}} 150w,
                                        /storage/{{$chitietsanpham->thumbnail}} 300w
                              " sizes="(max-width: 100px) 100vw, 100px" /></noscript><img style="width:100px; height:100px;" src="/storage/{{$chitietsanpham->thumbnail}}" class="lazyload attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" loading="lazy" data-srcset="" data-sizes="(max-width: 100px) 100vw, 100px" /></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    
                    <aside id="woocommerce_products-3" class="widget woocommerce widget_products">
                        <span class="widget-title shop-sidebar">Sản phẩm mới nhất</span>
                        <div class="is-divider small"></div>
                        <ul class="product_list_widget">
                            @foreach($sanphammoi as $spm)
                            <li>
                                <a href="/chi-tiet-san-pham/{{$spm->slug}}">
                                    <noscript><img style="width:100px; height:100px;" src="/storage/{{$spm->thumbnail}}" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" srcset="
                                    /storage/{{$spm->thumbnail}} 100w,
                                    /storage/{{$spm->thumbnail}} 150w,
                                    /storage/{{$spm->thumbnail}} 300w
                            " sizes="(max-width: 100px) 100vw, 100px" /></noscript><img style="width:100px; height:100px;" src="/storage/{{$spm->thumbnail}}" data-src="/storage/{{$spm->thumbnail}}" class="lazyload attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" data-srcset="" data-sizes="(max-width: 100px) 100vw, 100px" />
                                    <span class="product-title">{{$spm->title}}</span>
                                </a>
                                
                                <ins><span class="woocommerce-Price-amount amount"><bdi>{{$spm->price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                    <aside id="flatsome_recent_posts-3" class="widget flatsome_recent_posts">
                        <span class="widget-title shop-sidebar">Bài viết mới nhất</span>
                        <div class="is-divider small"></div>
                        <ul>
                            @foreach($tinlienquan as $tlq)
                            <li class="recent-blog-posts-li">
                                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                    <div class="flex-col mr-half">
                                        <div class="badge post-date badge-square">
                                            <div class="badge-inner bg-fill" style="
                                background: url(/storage/{{$tlq->thumbnail}});
                                border: 0;
                              "></div>
                                        </div>
                                    </div>
                                    <div class="flex-col flex-grow">
                                        <a href="/chi-tiet-tin-tuc/{{$tlq->slug}}" title="{{$tlq->title}}">{{$tlq->title}}</a>
                                        <span class="post_comments op-7 block is-xsmall"><a href="/chi-tiet-tin-tuc/{{$tlq->slug}}"></a></span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
                <div class="col large-9">
                    <div class="product-main">
                        <div class="row">
                            <div class="large-5 col">
                                <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                    <div class="badge-container is-larger absolute left top z-1">
                                        <div class="callout badge badge-square">
                                            <!-- <div class="badge-inner secondary on-sale">
                                                <span class="onsale">-13%</span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="image-tools absolute top show-on-hover right z-3"></div>
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
                                        
                                        <div data-thumb="/storage/{{$chitietsanpham->thumbnail}}" class="woocommerce-product-gallery__image slide">
                                            <a href="/chi-tiet-san-pham/{{$chitietsanpham->slug}}"><img style="width:600px; height:450px;" src="/storage/{{$chitietsanpham->thumbnail}}" class="skip-lazy" alt="" title="z2156728758753_b1c2f7465d391b2dc34c069f8e4a7c4e" data-caption="" data-src="/storage/{{$chitietsanpham->thumbnail}}" data-large_image="/storage/{{$chitietsanpham->thumbnail}}" data-large_image_width="2560" data-large_image_height="1920" srcset="
                                            /storage/{{$chitietsanpham->thumbnail}}   600w,
                                            /storage/{{$chitietsanpham->thumbnail}}   300w,
                                            /storage/{{$chitietsanpham->thumbnail}}  768w,
                                            /storage/{{$chitietsanpham->thumbnail}} 1024w
                                " sizes="(max-width: 600px) 100vw, 600px" /></a>
                                        </div>
                                    </figure>
                                    <div class="image-tools absolute bottom left z-3">
                                        <!-- <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="Zoom">
                                            <i class="icon-expand"></i>
                                        </a> -->
                                    </div>
                                </div>
                                
                            </div>
                            <div class="product-info summary entry-summary col col-fit product-summary text-left">
                                
                                <h1 class="product-title product_title entry-title">
                                    {{$chitietsanpham->title}}
                                </h1>
                                <div class="is-divider small"></div>
                                <!-- <ul class="next-prev-thumbs is-small show-for-medium">
                                    <li class="prod-dropdown has-dropdown">
                                        <a href="/chi-tiet-san-pham/{{$chitietsanpham->slug}}" rel="next" class="button icon is-outline circle">
                                            
                                        </a>
                                        <div class="nav-dropdown">
                                            <a title="Ốc Bươu Đen Giống 3 Tuần tuổi" href="../oc-buou-den-giong-3-tuan-tuoi/index.html">
                                                <noscript><img width="100" height="100" src="../../wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-100x100.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" loading="lazy" srcset="
                                    https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-100x100.jpg 100w,
                                    https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-150x150.jpg 150w,
                                    https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-300x300.jpg 300w
                                  " sizes="(max-width: 100px) 100vw, 100px" /></noscript><img width="100" height="100" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20100%20100%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-100x100.jpg" class="lazyload attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" loading="lazy" data-srcset="https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-100x100.jpg 100w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-300x300.jpg 300w" data-sizes="(max-width: 100px) 100vw, 100px" /></a>
                                        </div>
                                    </li>
                                    <li class="prod-dropdown has-dropdown">
                                        <a href="../trung-oc-buou-den-giong/index.html" rel="next" class="button icon is-outline circle">
                                            <i class="icon-angle-right"></i>
                                        </a>
                                        <div class="nav-dropdown">
                                            <a title="Trứng Ốc Bươu Đen Giống" href="../trung-oc-buou-den-giong/index.html">
                                                <noscript><img width="100" height="100" src="../../wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-100x100.jpg" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" loading="lazy" srcset="
                                    https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-100x100.jpg 100w,
                                    https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-150x150.jpg 150w,
                                    https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-300x300.jpg 300w
                                  " sizes="(max-width: 100px) 100vw, 100px" /></noscript><img width="100" height="100" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20100%20100%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-100x100.jpg" class="lazyload attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image" alt="" loading="lazy" data-srcset="https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-100x100.jpg 100w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-300x300.jpg 300w" data-sizes="(max-width: 100px) 100vw, 100px" /></a>
                                        </div>
                                    </li>
                                </ul> -->
                                <div class="price-wrapper">
                                    <p class="price product-page-price price-on-sale">
                                        
                                        <ins><span class="woocommerce-Price-amount amount"><bdi>{{$chitietsanpham->price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                    </p>
                                </div>
                                <!-- <div class="product-short-description">
                                    <p>
                                        Bảng báo giá ốc bươu đen giống năm 2022 :<br />
                                        <span class="pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu"><noscript><img src="../../../static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png" alt="&#x2705;" width="16" height="16" /></noscript><img class="lazyload" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2016%2016%22%3E%3C/svg%3E" data-src="https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png" alt="&#x2705;" width="16" height="16" /></span>  100g = 3.000 Con
                                    </p>
                                    <p>
                                        <span class="pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu"><noscript><img src="../../../static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png" alt="&#x2705;" width="16" height="16" /></noscript><img class="lazyload" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2016%2016%22%3E%3C/svg%3E" data-src="https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png" alt="&#x2705;" width="16" height="16" />
                                             </span>1Kg = 30.000 Con
                                    </p>
                                    <p>
                                        <span class="pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu"><noscript><img src="../../../static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png" alt="&#x2705;" width="16" height="16" /></noscript><img class="lazyload" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2016%2016%22%3E%3C/svg%3E" data-src="https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png" alt="&#x2705;" width="16" height="16" /></span>  Thuần Dưỡng 14 Ngày
                                    </p>
                                    <p>
                                        <span class="pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu"><img class="lazyloaded" src="../../../static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png" alt="&#x1f449;" width="16" height="16" data-src="https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png" />
                                            Đơn đặt hàng tối thiểu từ 3000 con<br />
                                        </span>
                                    </p>
                                    <p>&#8211; Tặng 20% Hao Hụt</p>
                                    <p>
                                        &#8211; Hỗ trợ &#8211; Thu mua ốc thịt cho bà con nông
                                        dân đã lấy giống bên Trại.
                                    </p>
                                    <p>+ Tư vấn &#8211; Thiêt kế môi trường nuôi</p>
                                    <p>+ Cung cấp con giống</p>
                                    <p>+ Hỗ trợ kỹ thuật nuôi trong suốt quá trình nuôi</p>
                                    <p>
                                        + Thu mua ốc thịt tại ao theo giá thị trường tại thời
                                        điểm thu mua.
                                    </p>
                                </div> -->
                                <!-- <form class="cart" action="https://traiocgiong.com/san-pham/oc-buou-den-giong-2-tuan-tuoi/" method="post" enctype="multipart/form-data">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus button is-form" />
                                        <label class="screen-reader-text" for="quantity_64ad965a8fc8f">Ốc Bươu Đen Giống 2 Tuần Tuổi số lượng</label>
                                        <input type="number" id="quantity_64ad965a8fc8f" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="SL" size="4" placeholder="" inputmode="numeric" />
                                        <input type="button" value="+" class="plus button is-form" />
                                    </div>
                                    <button type="submit" name="add-to-cart" value="1151" class="single_add_to_cart_button button alt">
                                        Mua hàng
                                    </button>
                                </form> -->
                                <div class="clearfix"></div>
                                <!-- <a data-popup-open="muahangnhanh" href="#">
                                    <div class="detailcall-1">
                                        <h3>ĐẶT HÀNG NHANH</h3>
                                        <span>Giao hàng tận nơi miễn phí nội thành!</span>
                                    </div>
                                </a> -->
                                <!-- <div class="popup" data-popup="muahangnhanh">
                                    <div class="popup-inner">
                                        <div id="contact_form_pop">
                                            <div class="form-title">
                                                <h3>Đặt hàng nhanh</h3>
                                                <p>
                                                    Giao hàng tân nơi, miễn phí giao hàng toàn quốc
                                                </p>
                                                <hr />
                                            </div>
                                            <div class="form-content">
                                                <div class="cottrai">
                                                    <noscript><img src="../../wp-content/uploads/2020/11/z2532442820531_20e7b597120940e4b9a78d6a9757d083.jpg" /></noscript><img class="lazyload" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2020/11/z2532442820531_20e7b597120940e4b9a78d6a9757d083.jpg" />
                                                    <div class="title-wrapper">
                                                        Ốc Bươu Đen Giống 2 Tuần Tuổi
                                                    </div>
                                                    <del><span class="woocommerce-Price-amount amount"><bdi>400<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del>
                                                    <ins><span class="woocommerce-Price-amount amount"><bdi>350<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                                </div>
                                                <div class="cotphai">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Họ tên:" name="name" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Số điện thoại:" name="sdt" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email của bạn:" name="email" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Địa chỉ nhận hàng:" name="address" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Số lượng mua hàng" name="qty" value="1" required min="1" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" disabled name="total" required />
                                                    </div>
                                                    <button type="submit" class="btn btn-default" name="submit">
                                                        ĐẶT HÀNG
                                                    </button>
                                                    <div class="web79loading" style="display: inline-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="popup-close" data-popup-close="muahangnhanh" href="#">x</a>
                                    </div>
                                </div> -->
                                <!-- <script>
                                    var price = "350";
                                    var from =
                                        "Trại Ốc Giống ✅ Trại Cung Cấp Ốc Bươu Đen Bến Tre ✅";
                                    var blog_url = "../../index.html";
                                    var to = "webdesign@gmail.com";
                                </script>
                                <div class="product_meta">
                                    <span class="posted_in">Danh mục:
                                        <a href="../../danh-muc/oc-giong/oc-1-tuan-tuoi/index.html" rel="tag">Ốc 1 tuần tuổi</a>,
                                        <a href="../../danh-muc/oc-giong/index.html" rel="tag">Ốc giống</a></span>
                                </div>
                                <div class="social-icons share-icons share-row relative">
                                    <a href="whatsapp://send?text=%E1%BB%90c%20B%C6%B0%C6%A1u%20%C4%90en%20Gi%E1%BB%91ng%202%20Tu%E1%BA%A7n%20Tu%E1%BB%95i - https://traiocgiong.com/san-pham/oc-buou-den-giong-2-tuan-tuoi/" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp"><i class="icon-whatsapp"></i></a><a href="http://www.facebook.com/sharer.php?u=https://traiocgiong.com/san-pham/oc-buou-den-giong-2-tuan-tuoi/" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook"><i class="icon-facebook"></i></a><a href="http://twitter.com/share?url=https://traiocgiong.com/san-pham/oc-buou-den-giong-2-tuan-tuoi/" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter"><i class="icon-twitter"></i></a><a href="mailto:enteryour@addresshere.com?subject=%E1%BB%90c%20B%C6%B0%C6%A1u%20%C4%90en%20Gi%E1%BB%91ng%202%20Tu%E1%BA%A7n%20Tu%E1%BB%95i&amp;body=Check%20this%20out:%20https://traiocgiong.com/san-pham/oc-buou-den-giong-2-tuan-tuoi/" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend"><i class="icon-envelop"></i></a><a href="http://pinterest.com/pin/create/button/?url=https://traiocgiong.com/san-pham/oc-buou-den-giong-2-tuan-tuoi/&amp;media=https://traiocgiong.com/wp-content/uploads/2020/11/z2532442820531_20e7b597120940e4b9a78d6a9757d083-768x1024.jpg&amp;description=%E1%BB%90c%20B%C6%B0%C6%A1u%20%C4%90en%20Gi%E1%BB%91ng%202%20Tu%E1%BA%A7n%20Tu%E1%BB%95i" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest"><i class="icon-pinterest"></i></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://traiocgiong.com/san-pham/oc-buou-den-giong-2-tuan-tuoi/&amp;title=%E1%BB%90c%20B%C6%B0%C6%A1u%20%C4%90en%20Gi%E1%BB%91ng%202%20Tu%E1%BA%A7n%20Tu%E1%BB%95i" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn"><i class="icon-linkedin"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                            <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left" role="tablist">
                                <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                    <a href="#tab-description"> Mô tả </a>
                                </li>
                                <!-- <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                    <a href="#tab-reviews"> Đánh giá (0) </a>
                                </li>
                                <li class="ux_global_tab_tab" id="tab-title-ux_global_tab" role="tab" aria-controls="tab-ux_global_tab">
                                    <a href="#tab-ux_global_tab"> Thông tin liên hệ </a>
                                </li> -->
                            </ul>
                            <div class="tab-panels">
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content active" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                    <div dir="auto"></div>
                                    <!-- <div dir="auto"> Ốc Bươu Đen Giống 2-3-4 Tuần Tuổi</div> -->
                                    <div dir="auto">
                                        <span class="pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu"></span>
                                        {!! $chitietsanpham->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="related related-products-wrapper product-section">
                            <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                Sản phẩm tương tự
                            </h3>
                            <div class="row large-columns-3 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                                <div class="product-small col has-hover product type-product post-1147 status-publish instock product_cat-oc-bo-me product_cat-oc-giong has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                            <div class="callout badge badge-square">
                                                <div class="badge-inner secondary on-sale">
                                                    <span class="onsale">-24%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-none">
                                                    <a href="../trung-oc-buou-den-giong/index.html">
                                                        <noscript><img width="300" height="300" src="../../wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-300x300.jpg 300w,
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-150x150.jpg 150w,
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-100x100.jpg 100w
                                      " sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-300x300.jpg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-300x300.jpg 300w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532638357294_4e83f227473b44f0a5ab6504862cb821-100x100.jpg 100w" data-sizes="(max-width: 300px) 100vw, 300px" />
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="../trung-oc-buou-den-giong/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Trứng Ốc Bươu Đen Giống</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    &#x2705; Trứng ốc bươu đen giống loại 1 &#x2705;
                                                    Tỷ lệ nở 90 - 95% &#x2705; 1Kg trứng ấp
                                                    nở&hellip;
                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi>1.700.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del>
                                                        <ins><span class="woocommerce-Price-amount amount"><bdi>1.300.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a href="index5560.html?add-to-cart=1147" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-flat" data-product_id="1147" data-product_sku="" aria-label="Thêm &ldquo;Trứng Ốc Bươu Đen Giống&rdquo; vào giỏ hàng" rel="nofollow">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small col has-hover product type-product post-1789 status-publish instock product_cat-oc-giong has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                            <div class="callout badge badge-square">
                                                <div class="badge-inner secondary on-sale">
                                                    <span class="onsale">-8%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-none">
                                                    <a href="../oc-buou-den-giong-5-tuan-tuoi/index.html">
                                                        <noscript><img width="300" height="300" src="../../wp-content/uploads/2022/07/MG_3993-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="
                                        https://traiocgiong.com/wp-content/uploads/2022/07/MG_3993-300x300.jpg 300w,
                                        https://traiocgiong.com/wp-content/uploads/2022/07/MG_3993-150x150.jpg 150w,
                                        https://traiocgiong.com/wp-content/uploads/2022/07/MG_3993-100x100.jpg 100w
                                      " sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2022/07/MG_3993-300x300.jpg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://traiocgiong.com/wp-content/uploads/2022/07/MG_3993-300x300.jpg 300w, https://traiocgiong.com/wp-content/uploads/2022/07/MG_3993-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2022/07/MG_3993-100x100.jpg 100w" data-sizes="(max-width: 300px) 100vw, 300px" />
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="../oc-buou-den-giong-5-tuan-tuoi/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Ốc Bươu Đen Giống 5 Tuần Tuổi</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    &#x1f449; Đơn đặt hàng tối thiểu từ 3000 con –
                                                    Tặng 20% Hao Hụt – Hỗ trợ – Thu mua&hellip;
                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi>650<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del>
                                                        <ins><span class="woocommerce-Price-amount amount"><bdi>600<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a href="indexb028.html?add-to-cart=1789" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-flat" data-product_id="1789" data-product_sku="" aria-label="Thêm &ldquo;Ốc Bươu Đen Giống 5 Tuần Tuổi&rdquo; vào giỏ hàng" rel="nofollow">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small col has-hover product type-product post-1201 status-publish last instock product_cat-oc-bo-me product_cat-oc-giong has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1"></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-none">
                                                    <a href="../oc-bo-me-loai-1/index.html">
                                                        <noscript><img width="300" height="300" src="../../wp-content/uploads/2020/11/z2532486108137_e2aedd37e881c4753d79a0aa31b34b36-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532486108137_e2aedd37e881c4753d79a0aa31b34b36-300x300.jpg 300w,
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532486108137_e2aedd37e881c4753d79a0aa31b34b36-150x150.jpg 150w,
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532486108137_e2aedd37e881c4753d79a0aa31b34b36-100x100.jpg 100w
                                      " sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2020/11/z2532486108137_e2aedd37e881c4753d79a0aa31b34b36-300x300.jpg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://traiocgiong.com/wp-content/uploads/2020/11/z2532486108137_e2aedd37e881c4753d79a0aa31b34b36-300x300.jpg 300w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532486108137_e2aedd37e881c4753d79a0aa31b34b36-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532486108137_e2aedd37e881c4753d79a0aa31b34b36-100x100.jpg 100w" data-sizes="(max-width: 300px) 100vw, 300px" />
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="../oc-bo-me-loai-1/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Ốc Bố Mẹ Loại 1</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi>380.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a href="indexb42f.html?add-to-cart=1201" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-flat" data-product_id="1201" data-product_sku="" aria-label="Thêm &ldquo;Ốc Bố Mẹ Loại 1&rdquo; vào giỏ hàng" rel="nofollow">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small col has-hover product type-product post-1156 status-publish first instock product_cat-oc-2-tuan-tuoi product_cat-oc-giong has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                            <div class="callout badge badge-square">
                                                <div class="badge-inner secondary on-sale">
                                                    <span class="onsale">-20%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-none">
                                                    <a href="../oc-buou-den-giong-3-tuan-tuoi/index.html">
                                                        <noscript><img width="300" height="300" src="../../wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-300x300.jpg 300w,
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-150x150.jpg 150w,
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-100x100.jpg 100w
                                      " sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-300x300.jpg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-300x300.jpg 300w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532442863982_618f04c45bf1badfc4926c382d65c5ed-100x100.jpg 100w" data-sizes="(max-width: 300px) 100vw, 300px" />
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="../oc-buou-den-giong-3-tuan-tuoi/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Ốc Bươu Đen Giống 3 Tuần tuổi</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    Bảng báo giá ốc bươu đen giống năm 2022 :   100g
                                                    = 2500 Con  1Kg = 25.000 Con  &hellip;
                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi>500<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del>
                                                        <ins><span class="woocommerce-Price-amount amount"><bdi>400<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a href="index8ced.html?add-to-cart=1156" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-flat" data-product_id="1156" data-product_sku="" aria-label="Thêm &ldquo;Ốc Bươu Đen Giống 3 Tuần tuổi&rdquo; vào giỏ hàng" rel="nofollow">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small col has-hover product type-product post-863 status-publish instock product_cat-chua-phan-loai product_cat-oc-giong product_cat-oc-nhoi-thuong-pham has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1"></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-none">
                                                    <a href="../oc-thuong-pham-loai-1/index.html">
                                                        <noscript><img width="300" height="300" src="../../wp-content/uploads/2017/11/z2532638418653_0af3ea42b7ed8a022201b5897f2d1564-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="
                                        https://traiocgiong.com/wp-content/uploads/2017/11/z2532638418653_0af3ea42b7ed8a022201b5897f2d1564-300x300.jpg 300w,
                                        https://traiocgiong.com/wp-content/uploads/2017/11/z2532638418653_0af3ea42b7ed8a022201b5897f2d1564-150x150.jpg 150w,
                                        https://traiocgiong.com/wp-content/uploads/2017/11/z2532638418653_0af3ea42b7ed8a022201b5897f2d1564-100x100.jpg 100w
                                      " sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2017/11/z2532638418653_0af3ea42b7ed8a022201b5897f2d1564-300x300.jpg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://traiocgiong.com/wp-content/uploads/2017/11/z2532638418653_0af3ea42b7ed8a022201b5897f2d1564-300x300.jpg 300w, https://traiocgiong.com/wp-content/uploads/2017/11/z2532638418653_0af3ea42b7ed8a022201b5897f2d1564-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2017/11/z2532638418653_0af3ea42b7ed8a022201b5897f2d1564-100x100.jpg 100w" data-sizes="(max-width: 300px) 100vw, 300px" />
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="../oc-thuong-pham-loai-1/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Ốc thương phẩm loại 1</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi>80.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a href="index1418.html?add-to-cart=863" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-flat" data-product_id="863" data-product_sku="" aria-label="Thêm &ldquo;Ốc thương phẩm loại 1&rdquo; vào giỏ hàng" rel="nofollow">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small col has-hover product type-product post-1205 status-publish instock product_cat-oc-bo-me product_cat-oc-giong has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1"></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-none">
                                                    <a href="../oc-bo-me-loai-2/index.html">
                                                        <noscript><img width="300" height="300" src="../../wp-content/uploads/2020/11/z2532526064914_bb22d7b43ef2066be3e3099dbf5bacc3-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532526064914_bb22d7b43ef2066be3e3099dbf5bacc3-300x300.jpg 300w,
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532526064914_bb22d7b43ef2066be3e3099dbf5bacc3-150x150.jpg 150w,
                                        https://traiocgiong.com/wp-content/uploads/2020/11/z2532526064914_bb22d7b43ef2066be3e3099dbf5bacc3-100x100.jpg 100w
                                      " sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2020/11/z2532526064914_bb22d7b43ef2066be3e3099dbf5bacc3-300x300.jpg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://traiocgiong.com/wp-content/uploads/2020/11/z2532526064914_bb22d7b43ef2066be3e3099dbf5bacc3-300x300.jpg 300w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532526064914_bb22d7b43ef2066be3e3099dbf5bacc3-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2020/11/z2532526064914_bb22d7b43ef2066be3e3099dbf5bacc3-100x100.jpg 100w" data-sizes="(max-width: 300px) 100vw, 300px" />
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="../oc-bo-me-loai-2/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Ốc Bố Mẹ Loại 2</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi>280.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a href="indexc012.html?add-to-cart=1205" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-flat" data-product_id="1205" data-product_sku="" aria-label="Thêm &ldquo;Ốc Bố Mẹ Loại 2&rdquo; vào giỏ hàng" rel="nofollow">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small col has-hover product type-product post-311 status-publish last instock product_cat-chua-phan-loai product_cat-oc-giong product_cat-oc-nhoi-thuong-pham has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1"></div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-none">
                                                    <a href="../oc-thuong-pham-loai-2/index.html">
                                                        <noscript><img width="300" height="300" src="../../wp-content/uploads/2017/09/%e1%bb%91c-th%c6%b0%c6%a1ng-ph%e1%ba%a9m-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="
                                        https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm-300x300.jpg 300w,
                                        https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm-150x150.jpg 150w,
                                        https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm-600x598.jpg 600w,
                                        https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm-100x100.jpg 100w,
                                        https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm.jpg         667w
                                      " sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm-300x300.jpg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm-300x300.jpg 300w, https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm-600x598.jpg 600w, https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm-100x100.jpg 100w, https://traiocgiong.com/wp-content/uploads/2017/09/ốc-thương-phẩm.jpg 667w" data-sizes="(max-width: 300px) 100vw, 300px" />
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="../oc-thuong-pham-loai-2/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Ốc thương phẩm loại 2</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><bdi>65.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a href="index3d1b.html?add-to-cart=311" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-flat" data-product_id="311" data-product_sku="" aria-label="Thêm &ldquo;Ốc thương phẩm loại 2&rdquo; vào giỏ hàng" rel="nofollow">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-small col has-hover product type-product post-1298 status-publish first instock product_cat-oc-giong has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                            <div class="callout badge badge-square">
                                                <div class="badge-inner secondary on-sale">
                                                    <span class="onsale">-17%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-small box">
                                            <div class="box-image">
                                                <div class="image-none">
                                                    <a href="../oc-buou-den-giong-4-tuan-tuoi/index.html">
                                                        <noscript><img width="300" height="300" src="../../wp-content/uploads/2021/06/IMG_5772-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="
                                        https://traiocgiong.com/wp-content/uploads/2021/06/IMG_5772-300x300.jpg 300w,
                                        https://traiocgiong.com/wp-content/uploads/2021/06/IMG_5772-150x150.jpg 150w,
                                        https://traiocgiong.com/wp-content/uploads/2021/06/IMG_5772-100x100.jpg 100w
                                      " sizes="(max-width: 300px) 100vw, 300px" /></noscript><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20300%20300%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2021/06/IMG_5772-300x300.jpg" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-srcset="https://traiocgiong.com/wp-content/uploads/2021/06/IMG_5772-300x300.jpg 300w, https://traiocgiong.com/wp-content/uploads/2021/06/IMG_5772-150x150.jpg 150w, https://traiocgiong.com/wp-content/uploads/2021/06/IMG_5772-100x100.jpg 100w" data-sizes="(max-width: 300px) 100vw, 300px" />
                                                    </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover"></div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                            </div>
                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="../oc-buou-den-giong-4-tuan-tuoi/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Ốc Bươu Đen Giống 4 Tuần Tuổi</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    Bảng báo giá ốc bươu đen giống năm 2022 :   100g
                                                    = 2000 Con  1Kg = 20.000 Con  &hellip;
                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi>600<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del>
                                                        <ins><span class="woocommerce-Price-amount amount"><bdi>500<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                </div>
                                                <div class="add-to-cart-button">
                                                    <a href="indexef0a.html?add-to-cart=1298" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-flat" data-product_id="1298" data-product_sku="" aria-label="Thêm &ldquo;Ốc Bươu Đen Giống 4 Tuần Tuổi&rdquo; vào giỏ hàng" rel="nofollow">Mua hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endif
@endsection