@extends('gasonky.views.layouts.trangchu')
@section('content')
<main id="main" class="">

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "395127951325267");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = '../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">

                    <header class="entry-header">
                        <h1 class="entry-title mb uppercase">Trang chủ</h1>
                    </header><!-- .entry-header -->


                    <div class="slider-wrapper relative" id="slider-749887269" style="margin-bottom:30px;">
                        <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal" data-flickity-options='{
                                                "cellAlign": "center",
                                                "imagesLoaded": true,
                                                "lazyLoad": 1,
                                                "freeScroll": false,
                                                "wrapAround": true,
                                                "autoPlay": 6000,
                                                "pauseAutoPlayOnHover" : true,
                                                "prevNextButtons": true,
                                                "contain" : true,
                                                "adaptiveHeight" : true,
                                                "dragThreshold" : 10,
                                                "percentPosition": true,
                                                "pageDots": true,
                                                "rightToLeft": false,
                                                "draggable": true,
                                                "selectedAttraction": 0.1,
                                                "parallax" : 0,
                                                "friction": 0.6        }'>

                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1795031943">
                                <a class="" href="index.html">
                                    <div class="img-inner image-cover dark" style="padding-top:478px;">
                                        <img width="1500" height="581" src="wp-content/uploads/2021/10/banner-gachaybo.png" class="attachment-original size-original" alt=""  srcset="https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/10/banner-gachaybo.png 1500w, https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/10/banner-gachaybo-300x116.png 300w, https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/10/banner-gachaybo-1024x397.png 1024w, https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/10/banner-gachaybo-150x58.png 150w, https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/10/banner-gachaybo-768x297.png 768w, https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/10/banner-gachaybo-350x136.png 350w" sizes="(max-width: 1500px) 100vw, 1500px" />
                                    </div>
                                </a>
                                <style scope="scope">
                                    #image_1795031943 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>

                        <!-- <div class="loading-spin dark large centered"></div> -->

                        <style scope="scope">
                        </style>
                    </div><!-- .ux-slider-wrapper -->



                    <div class="tabbed-content">
                        <div class="tab-panels">
                            <div class="panel active entry-content" id="tab_all">


                                <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small">

                                    @foreach($tintuc2 as $tt)
                                    <div class="product-small col has-hover product type-product post-8635 status-publish first instock product_cat-mon-ga product_tag-ga-hap product_tag-ga-hap-la-chanh has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="col-inner">

                                            <div class="badge-container absolute left top z-1">
                                            </div>
                                            <div class="product-small box ">
                                                <div class="box-image">
                                                    <div class="image-fade_in_back">
                                                        <a href="product/ga-hap-la-chanh/index.html">
                                                            <img width="350" height="350" src="/storage/{{$tt->thumbnail}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="/storage/{{$tt->thumbnail}}" sizes="(max-width: 350px) 100vw, 350px" /> </a>
                                                    </div>
                                                    <div class="image-tools is-small top right show-on-hover">
                                                    </div>
                                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                    </div>
                                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                    </div>
                                                </div><!-- box-image -->

                                                <div class="box-text box-text-products text-center grid-style-2">
                                                    <div class="title-wrapper">
                                                        <p class="name product-title"><a href="/chi-tiet-tin-tuc?slug={{$tt->slug}}">{{$tt->title}}</a></p>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi>{{$tt->price}}&nbsp;<span class="woocommerce-Price-currencySymbol">VNĐ</span></bdi></span></span>
                                                    </div>
                                                    
                                                </div><!-- box-text -->
                                            </div><!-- box -->
                                        </div><!-- .col-inner -->
                                    </div><!-- col -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="section" id="section_1815065025">
                        <div class="bg section-bg fill bg-fill  bg-loaded">
                        </div><!-- .section-bg -->

                        <div class="section-content relative">

                            <div class="row" id="row-1060419428">
                                <div class="col medium-4 small-12 large-4">
                                    <div class="col-inner text-center">
                                        <h2><span style="font-size: 160%; color: #ffffff;"><strong>Đến với gà chạy bộ</strong></span></h2>
                                        <p><span style="color: #ffffff;font-size: 20px;">Để đặt những món ăn ngon</span></p>
                                        <a href="menu/index.html" target="_self" class="button white is-large" style="border-radius:99px;">
                                            <span>ĐẶT NGAY</span>
                                        </a>

                                    </div>
                                </div>
                                <div class="col medium-4 small-12 large-4">
                                    <div class="col-inner">
                                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1749926467">
                                            <div class="img-inner dark">
                                                <img width="416" height="307" src="wp-content/uploads/2021/10/h2_shipper-3.png" class="attachment-large size-large" alt="" decoding="async" loading="lazy" srcset="https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/10/h2_shipper-3.png 416w, https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/10/h2_shipper-3-300x221.png 300w" sizes="(max-width: 416px) 100vw, 416px" />
                                            </div>

                                            <style scope="scope">
                                                #image_1749926467 {
                                                    width: 100%;
                                                }
                                            </style>
                                        </div>

                                    </div>
                                </div>
                                <div class="col medium-4 small-12 large-4">
                                    <div class="col-inner text-center">
                                    <h2><span style="font-size: 160%; color: #ffffff;"><strong>Đến với gà chạy bộ</strong></span></h2>
                                        <p><span style="color: #ffffff;font-size: 20px;">Siêu nhiều ưu đãi  , siêu hấp dẫn</span></p>
                                        <a href="menu/index.html" target="_self" class="button white is-large" style="border-radius:99px;">
                                            <span>ĐẶT NGAY</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div><!-- .section-content -->


                        <style scope="scope">
                            #section_1815065025 {
                                padding-top: 30px;
                                padding-bottom: 30px;
                                margin-bottom: 20px;
                                background-color: rgb(177, 32, 43);
                            }
                        </style>
                    </section>


                    @foreach($tintuc1 as $t1)
                    <div class="row row-small contact-home" id="row-634643991">
                        <div class="col medium-7 small-12 large-7">
                            <div class="col-inner">
                                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_356962295">
                                    <div class="img-inner dark">
                                        <img width="1024" height="608" src="wp-content/uploads/2021/06/ga-chay-bo.png" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/ga-chay-bo.png 1024w, https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/ga-chay-bo-560x333.png 560w, https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/ga-chay-bo-300x178.png 300w, https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/ga-chay-bo-768x456.png 768w" sizes="(max-width: 1024px) 100vw, 1024px" />
                                    </div>

                                    <style scope="scope">
                                        #image_356962295 {
                                            width: 100%;
                                        }
                                    </style>
                                </div>

                            </div>
                        </div>



                        <div class="col medium-5 small-12 large-5">
                            <div class="col-inner">

                                <div class="contact-home-txt">
                                   
                                    <h2 class="title-home"><span style="font-size: 90%;"><strong><span style="font-family: helvetica, arial, sans-serif;">{{$t1->title}} ❤</span></strong></span></h2>
                                    <p>{{$t1->content}}</p>

                                    <div class="btn-home"><a href="/gioi-thieu?slug={{$t1->slug}}">{{$t1->seo_title}}</a></div>
                                   
                                </div>
                            </div>
                        </div>

                        <style scope="scope">

                        </style>
                    </div>
                    @endforeach

                    <h2 class="title-home">Blog</h2>

                    <div class="row post-home large-columns-3 medium-columns-1 small-columns-1">
                        @foreach($tintuc3 as $t3)
       
                        <div class="col post-item">
                            <div class="col-inner">
                           
                                <a href="giong-ga-tay-do-bourbon/index.html" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top:56.25%;">
                                                <img width="300" height="305" src="wp-content/uploads/2021/12/Gio%cc%82%cc%81ng-ga%cc%80-ta%cc%82y-do%cc%89-Bourbon--300x305.jpg" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="/storage/{{$t3->thumbnail}}" sizes="(max-width: 300px) 100vw, 300px" />
                                            </div>
                                        </div><!-- .box-image -->
                                        <div class="box-text text-center">
                                            <div class="box-text-inner blog-post-inner">


                                                <h5 class="post-title is-large ">{{$t3->title}}</h5>
                                                <div class="post-meta is-small op-8">Tháng Mười Hai 22, 2021
                                                </div>
                                                <div class="is-divider"></div>



                                            </div><!-- .box-text-inner -->
                                        </div><!-- .box-text -->
                                    </div><!-- .box -->
                                </a><!-- .link -->
                             
                            </div><!-- .col-inner -->
                           
                        </div><!-- .col -->
                        @endforeach
                    </div>
                    


                    <div class="row large-columns-3 medium-columns-1 small-columns-1 slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>

                    </div>


                </div><!-- .col-inner -->
            </div><!-- .large-12 -->
        </div><!-- .row -->
    </div>


</main><!-- #main -->

@endsection