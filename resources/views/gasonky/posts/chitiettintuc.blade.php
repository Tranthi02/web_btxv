@extends('gasonky.views.layouts.trangchu')
@section('content')

<div class="shop-container">

	<div class="container">
		<div class="woocommerce-notices-wrapper"></div>
	</div><!-- /.container -->
	<div id="product-660" class="product type-product post-660 status-publish first instock product_cat-thit-ga has-post-thumbnail shipping-taxable purchasable product-type-simple">
		<div class="product-container">
		
		
			@if($xemchitiet)
			<div class="product-main">
				<div class="row content-row mb-0">

					<div class="product-gallery large-5 col">
						<div class="row row-small">
							<div class="col large-10">

								<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images relative mb-half has-hover" data-columns="4">

									<div class="badge-container is-larger absolute left top z-1">
									</div>
									<div class="image-tools absolute top show-on-hover right z-3">
									</div>

									<figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-0" data-flickity-options='{
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
										<div data-thumb="https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/ga-cung-dep-1-100x100.png" class="woocommerce-product-gallery__image slide first"><a href="../../wp-content/uploads/2021/06/ga-cung-dep-1.png"><img width="350" height="291" src="../../wp-content/uploads/2021/06/ga-cung-dep-1-560x465.png" class="wp-post-image skip-lazy" alt="Gà cúng đẹp" decoding="async" loading="lazy" title="ga-cung-dep" data-caption="Gà cúng đẹp" data-src="https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/ga-cung-dep-1.png" data-large_image="https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/ga-cung-dep-1.png" data-large_image_width="678" data-large_image_height="563" srcset="/storage/{{$xemchitiet->thumbnail}}"></a></div>
									</figure>

									<div class="image-tools absolute bottom left z-3">
										<a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="Zoom">
											<i class="icon-expand"></i> </a>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="product-info summary col-fit col entry-summary product-summary form-flat">
						<h1 class="product-title product_title entry-title">{{$xemchitiet->title}}</h1>

						<div class="is-divider small"></div>
						<div class="price-wrapper">
							<p class="price product-page-price ">
								<span class="woocommerce-Price-amount amount"><bdi>{{$xemchitiet->price}}&nbsp;<span class="woocommerce-Price-currencySymbol">VNĐ</span></bdi></span>
							</p>
						</div>
						<div class="product-short-description">
							<p>{!! $xemchitiet->content !!}</p>
							<p>Liên hệ đặt gà cúng: <span style="font-size: 130%; color: #ed1c24;"><strong>0912 182 750</strong></span></p>
						</div>


						<form class="cart" action="https://gachaybo.com/product/dat-ga-cung/" method="post" enctype='multipart/form-data'>


						</form>


						<div class="product_meta">
						</div>
			
					</div><!-- .summary -->

<div class="row equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>


</div>
</div>

</div><!-- container -->
				




					<div id="product-sidebar" class="mfp-hide">
						<div class="sidebar-inner">
							<aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">Categories</span>
								<div class="is-divider small"></div>
								<ul class="product-categories">
									<li class="cat-item cat-item-272"><a href="../../danh-muc-san-pham/an-them/index.html">ăn thêm</a></li>
									<li class="cat-item cat-item-271"><a href="../../danh-muc-san-pham/com-van-phong/index.html">cơm văn phòng</a></li>
									<li class="cat-item cat-item-47 cat-parent current-cat-parent"><a href="../../danh-muc-san-pham/store/index.html">Cửa hàng</a>
										<ul class='children'>
											<li class="cat-item cat-item-50"><a href="../../danh-muc-san-pham/store/do-kho/index.html">Đồ khô</a></li>
											<li class="cat-item cat-item-49"><a href="../../danh-muc-san-pham/store/rau-cu/index.html">Rau củ</a></li>
											<li class="cat-item cat-item-48 current-cat"><a href="../../danh-muc-san-pham/store/thit-ga/index.html">Thịt gà</a></li>
										</ul>
									</li>
									<li class="cat-item cat-item-277"><a href="../../danh-muc-san-pham/do-uong-2/index.html">đồ uống</a></li>
									<li class="cat-item cat-item-275"><a href="../../danh-muc-san-pham/met-ga/index.html">mẹt gà</a></li>
									<li class="cat-item cat-item-274"><a href="../../danh-muc-san-pham/mon-ga/index.html">món gà</a></li>
									<li class="cat-item cat-item-15"><a href="../../danh-muc-san-pham/san-pham-khac/index.html">Sản phẩm khác</a></li>
									<li class="cat-item cat-item-298"><a href="../../danh-muc-san-pham/thit-ga-sach/index.html">thịt gà sạch</a></li>
									<li class="cat-item cat-item-297"><a href="../../danh-muc-san-pham/thit-tuoi/index.html">Thịt tươi</a></li>
									<li class="cat-item cat-item-16 cat-parent"><a href="../../danh-muc-san-pham/menu/index.html">Thực đơn</a>
										<ul class='children'>
											<li class="cat-item cat-item-43"><a href="../../danh-muc-san-pham/menu/do-uong/index.html">Đồ uống</a></li>
										</ul>
									</li>
									<li class="cat-item cat-item-276"><a href="../../danh-muc-san-pham/trang-mieng/index.html">tráng miệng</a></li>
									<li class="cat-item cat-item-224 cat-parent"><a href="../../danh-muc-san-pham/trang-trai/index.html">Trang trại</a>
										<ul class='children'>
											<li class="cat-item cat-item-225"><a href="../../danh-muc-san-pham/trang-trai/ga-giong/index.html">Gà giống</a></li>
										</ul>
									</li>
								</ul>
							</aside>
						</div><!-- .sidebar-inner -->
					</div>

				</div><!-- .row -->
			</div><!-- .product-main -->

		</div>
		
			


	</div><!-- shop container -->

	</main><!-- #main -->
	@endif


	@endsection