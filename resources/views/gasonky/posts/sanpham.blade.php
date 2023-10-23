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
              xfbml            : true,
              version          : 'v12.0'
            });
          };
    
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = '../../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        </script>
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">
                    
                                    <header class="entry-header">
                        <h1 class="entry-title mb uppercase">Menu</h1>
                    </header><!-- .entry-header -->
                    
                                                            
                            
            <div class="tabbed-content">
          
        <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small">
          
             
                 @foreach($sanpham as $sa)       
    <div class="product-small col has-hover product type-product post-8929 status-publish first instock product_cat-mon-ga has-post-thumbnail shipping-taxable purchasable product-type-simple">
        <div class="col-inner">
        
    <div class="badge-container absolute left top z-1">
    </div>
        <div class="product-small box ">
            <div class="box-image">
                <div class="image-fade_in_back">
                    <a href="../product/ga-quay/index.html">
                        <img width="350" height="350" src="/storage/{{$sa->thumbnail}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy"  sizes="(max-width: 350px) 100vw, 350px" />				</a>
                </div>
                <div class="image-tools is-small top right show-on-hover">
                                </div>
                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                </div>
                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                </div>
                        </div><!-- box-image -->
    
            <div class="box-text box-text-products text-center grid-style-2">
                <div class="title-wrapper"><p class="name product-title"><a href="/chi-tiet-san-pham?slug={{$sa->slug}}">{{$sa->title}}</a></p></div><div class="price-wrapper">
        <span class="price"><span class="woocommerce-Price-amount amount"><bdi>{{$sa->price}}<span class="woocommerce-Price-currencySymbol">VNĐ</span></bdi></span></span>
    </div> 		</div><!-- box-text -->
        </div><!-- box -->
            </div><!-- .col-inner -->
    </div><!-- col -->
    @endforeach
                    
                        
   
                    
                </div>
    </div></div></div>
    <div style="display: none;"
        class="kk-star-ratings kksr-valign-bottom kksr-align-right "
        data-id="8682"
        data-slug="">
        <div class="kksr-stars">
        <div class="kksr-stars-inactive">
                <div class="kksr-star" data-star="1">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
                <div class="kksr-star" data-star="2">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
                <div class="kksr-star" data-star="3">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
                <div class="kksr-star" data-star="4">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
                <div class="kksr-star" data-star="5">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
        </div>
        <div class="kksr-stars-active" style="width: 84px;">
                <div class="kksr-star">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
                <div class="kksr-star">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
                <div class="kksr-star">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
                <div class="kksr-star">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
                <div class="kksr-star">
                <div class="kksr-icon" style="width: 24px; height: 24px;"></div>
            </div>
        </div>
    </div>
        <div class="kksr-legend">
                <strong class="kksr-score">3</strong>
            <span class="kksr-muted">/</span>
            <strong>5</strong>
            <span class="kksr-muted">(</span>
            <strong class="kksr-count">3</strong>
            <span class="kksr-muted">
                bình chọn        </span>
            <span class="kksr-muted">)</span>
        </div>
    </div>
    
                            
                                                    </div><!-- .col-inner -->
            </div><!-- .large-12 -->
        </div><!-- .row -->
    </div>
    
    
    </main><!-- #main -->
    
@endsection