@extends('gasonky.views.layouts.trangchu')
@section('content')
<div class="shop-container">

	<div class="container">
		<div class="woocommerce-notices-wrapper"></div>
	</div><!-- /.container -->
	<div id="product-7834" class="product type-product post-7834 status-publish first instock product_cat-san-pham-khac product_tag-com-ga has-post-thumbnail shipping-taxable purchasable product-type-simple">
		<div class="product-container">

			@if($sanpham)
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
										<div data-thumb="https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/com-ga-quay-100x100.jpeg" class="woocommerce-product-gallery__image slide first"><a href="../../wp-content/uploads/2021/06/com-ga-quay.jpg"><img width="350" height="196" src="../../wp-content/uploads/2021/06/com-ga-quay-560x313.jpg" class="wp-post-image skip-lazy" alt="" decoding="async" loading="lazy" title="cơm-gà-quay" data-caption="" data-src="https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/com-ga-quay.jpeg" data-large_image="https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/06/com-ga-quay.jpeg" data-large_image_width="772" data-large_image_height="432" srcset="/storage/{{$sanpham->thumbnail}}" sizes="(max-width: 350px) 100vw, 350px" /></a></div>
									</figure>

									<div class="image-tools absolute bottom left z-3">
										<a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="Zoom"></a>
									</div>
								</div>
							</div>

						</div>
					</div>


					<div class="product-info summary col-fit col entry-summary product-summary form-flat">

						<h1 class="product-title product_title entry-title">{{$sanpham->title}}</h1>

						<div class="is-divider small"></div>
						<div class="price-wrapper">
							<p class="price product-page-price ">
								<span class="woocommerce-Price-amount amount"><bdi>45 .000&nbsp;<span class="woocommerce-Price-currencySymbol">VNĐ</span></bdi></span>
							</p>
						</div>
						<div class="product-short-description">
							<p>{!! $sanpham->content !!}</p>
							<ul>
								<li>Mobile: 0976 212 555</li>
								<li>Ship hàng tận nơi</li>
							</ul>
						</div>
						<div id="product-sidebar" class="mfp-hide">
							<div class="sidebar-inner">
								<aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">Categories</span>
									<div class="is-divider small"></div>
									<ul class="product-categories">
										<li class="cat-item cat-item-272"><a href="../../danh-muc-san-pham/an-them/index.html">ăn thêm</a></li>
										<li class="cat-item cat-item-271"><a href="../../danh-muc-san-pham/com-van-phong/index.html">cơm văn phòng</a></li>
										<li class="cat-item cat-item-47 cat-parent"><a href="../../danh-muc-san-pham/store/index.html">Cửa hàng</a>
											<ul class='children'>
												<li class="cat-item cat-item-50"><a href="../../danh-muc-san-pham/store/do-kho/index.html">Đồ khô</a></li>
												<li class="cat-item cat-item-49"><a href="../../danh-muc-san-pham/store/rau-cu/index.html">Rau củ</a></li>
												<li class="cat-item cat-item-48"><a href="../../danh-muc-san-pham/store/thit-ga/index.html">Thịt gà</a></li>
											</ul>
										</li>
										<li class="cat-item cat-item-277"><a href="../../danh-muc-san-pham/do-uong-2/index.html">đồ uống</a></li>
										<li class="cat-item cat-item-275"><a href="../../danh-muc-san-pham/met-ga/index.html">mẹt gà</a></li>
										<li class="cat-item cat-item-274"><a href="../../danh-muc-san-pham/mon-ga/index.html">món gà</a></li>
										<li class="cat-item cat-item-15 current-cat"><a href="../../danh-muc-san-pham/san-pham-khac/index.html">Sản phẩm khác</a></li>
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


		</div>

		<!-- shop container -->
	

		</main><!-- #main -->
		@endif

		@endsection