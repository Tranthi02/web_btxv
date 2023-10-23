@extends('layout.trangchu')
@section('content')

<div class="shop-page-title category-page-title page-title featured-title dark ">

			<div class="page-title-bg fill">
				<div  class="title-bg fill bg-fill" data-parallax-fade="true" data-parallax="-2" data-parallax-background
					data-parallax-container=".page-title"></div>
				<div class="title-overlay fill"></div>
			</div>

			<div class="page-title-inner flex-row  medium-flex-wrap container">
				<div class="flex-col flex-grow medium-text-center">
					<h1 class="shop-page-title is-xlarge">Mật ong sữa chúa</h1>
					<div class="is-small">
						<nav class="woocommerce-breadcrumb breadcrumbs"><a href="../../index.html">Trang chủ</a> <span
								class="divider">&#47;</span> Mật ong sữa chúa</nav>
					</div>
					<div class="category-filtering category-filter-row show-for-medium">
						<a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left"
							class="filter-button uppercase plain">
							<i class="icon-menu"></i>
							<strong>Lọc</strong>
						</a>
						<div class="inline-block">
						</div>
					</div>
				</div><!-- .flex-left -->

				<div class="flex-col medium-text-center  form-flat">


					<p class="woocommerce-result-count hide-for-medium">
						Hiển thị một kết quả duy nhất</p>
					<form class="woocommerce-ordering" method="get">
						<select name="orderby" class="orderby">
							<option value="menu_order" selected='selected'>Thứ tự mặc định</option>
							<option value="popularity">Thứ tự theo mức độ phổ biến</option>
							<option value="rating">Thứ tự theo điểm đánh giá</option>
							<option value="date">Mới nhất</option>
							<option value="price">Thứ tự theo giá: thấp đến cao</option>
							<option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
						</select>
						<input type="hidden" name="paged" value="1" />
					</form>
				</div><!-- .flex-right -->

			</div><!-- flex-row -->
		</div><!-- .page-title -->

        <main id="main" class="">
			<div class="row category-page-row">

				<div class="col large-3 hide-for-medium ">
					<div id="shop-sidebar" class="sidebar-inner col-inner">
						<aside id="woocommerce_product_categories-2"
							class="widget woocommerce widget_product_categories"><span
								class="widget-title shop-sidebar">Danh mục sản phẩm</span>
							<div class="is-divider small"></div>
							<ul class="product-categories">
								<li class="cat-item cat-item-20"><a href="../mat-ong-chua-tuoi/index.html">Mật ong chúa
										tươi</a> <span class="count">(3)</span></li>
								<li class="cat-item cat-item-19"><a href="../mat-ong-gung/index.html">Mật ong gừng</a>
									<span class="count">(4)</span></li>
								<li class="cat-item cat-item-17"><a href="../mat-ong-hoa-ca-phe/index.html">Mật ong hoa
										cà phê</a> <span class="count">(4)</span></li>
								<li class="cat-item cat-item-18"><a href="../mat-ong-hoa-nhan/index.html">Mật ong hoa
										nhãn</a> <span class="count">(3)</span></li>
								<li class="cat-item cat-item-15"><a href="../mat-ong-rung/index.html">Mật ong rừng</a>
									<span class="count">(2)</span></li>
								<li class="cat-item cat-item-16 current-cat"><a href="index.html">Mật ong sữa chúa</a>
									<span class="count">(1)</span></li>
							</ul>
						</aside>
					</div><!-- .sidebar-inner -->
				</div><!-- #shop-sidebar -->

				<div class="col large-9">
					<div class="shop-container">

						<div class="woocommerce-notices-wrapper"></div>
						<div
							class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-equal-box-heights equalize-box">
                            @foreach($sanpham as $mor)    
							<div
								class="product-small col has-hover post-190 product type-product status-publish has-post-thumbnail product_cat-mat-ong-gung product_cat-mat-ong-hoa-ca-phe product_cat-mat-ong-sua-chua first instock shipping-taxable purchasable product-type-simple">
								<div class="col-inner">

									<div class="badge-container absolute left top z-1">
									</div>
									<div class="product-small box ">
										<div class="box-image">
											<div class="image-fade_in_back">
												<a href="../../san-pham/mat-ong-rung-da-lat-loai-2-lit-chai/index.html">
													<img width="300" height="300"
														src="{{$mor->thumbnail}}"
														class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
														alt=""
														srcset="{{$mor->thumbnail}} 300w, {{$mor->thumbnail}} 150w, {{$mor->thumbnail}} 100w"
														sizes="(max-width: 300px) 100vw, 300px" /><img width="300"
														height="300"
														src="{{$mor->thumbnail}}"
														data-src="{{$mor->thumbnail}}"
														class="lazy-load show-on-hover absolute fill hide-for-small back-image"
														alt="" srcset=""
														data-srcset="{{$mor->thumbnail}} 300w, {{$mor->thumbnail}} 150w, {{$mor->thumbnail}} 100w"
														sizes="(max-width: 300px) 100vw, 300px" /> </a>
											</div>
											<div class="image-tools is-small top right show-on-hover">
											</div>
											<div class="image-tools is-small hide-for-small bottom left show-on-hover">
											</div>
											<div
												class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
											</div>
										</div><!-- box-image -->

										<div class="box-text box-text-products text-center grid-style-2">
											<div class="title-wrapper">
												<p class="name product-title"><a
														href="../../san-pham/mat-ong-rung-da-lat-loai-2-lit-chai/index.html">{{$mor->title}}</a></p>
											</div>
											<div class="price-wrapper">
												<span class="price"><span
														class="woocommerce-Price-amount amount">{!!$mor->excerpt!!}<span
															class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
											</div>
											<div class="add-to-cart-button"><a href="index2684.html?add-to-cart=190"
													rel="nofollow" data-product_id="190"
													class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Mua
													ngay</a></div>
										</div><!-- box-text -->
									</div><!-- box -->
								</div><!-- .col-inner -->
							</div><!-- col -->
                            @endforeach
						</div><!-- row -->
					</div><!-- shop container -->
				</div>
			</div>

		</main><!-- #main -->

@endsection