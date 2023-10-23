@extends('lonrunglaikyson.views.layouts.trangchu')
@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"></li>
		<li data-target="#carousel-example-generic" data-slide-to="5"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<a href="#"><img src="../images/banner1.jpg" alt="LỢN RỪNG LAI.com"></a>
		</div>
		<div class="item">
			<a href="#"><img src="../images/banner2.jpg" alt="LỢN RỪNG LAI.com"></a>
		</div>
		<div class="item">
			<a href="lon-viet-nam.html"><img src="../images/banner3.jpg" alt="LỢN RỪNG LAI.com"></a>
		</div>
		<div class="item">
			<a href="#"><img src="../images/banner4.png" alt="LỢN RỪNG LAI.com"></a>
		</div>
		<div class="item">
			<a href="#"><img src="../images/banner5.jpg" alt="LỢN RỪNG LAI.com"></a>
		</div>
		<div class="item">
			<a href="#"><img src="../images/banner6.jpg" alt="LỢN RỪNG LAI.com"></a>
		</div>

	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	</a>
</div>


<div class="section-service">
	<table class="tb">
		<th>
			<div class="table-service">
				<img src="../images/t188b8.png" alt="Chất Lượng">
				<b>Chất Lượng</b>
				<p class="">Quốc Tế</p>
			</div>
		</th>
		<th>
			<div class="table-service">

				<img src="../images/t288b8.png" alt="Dịch Vụ">
				<b>Dịch Vụ</b>
				<p class="">Chuyên Nghiệp</p>
			</div>
		</th>
		<th>
			<div class="table-service">
				<img src="../images/t388b8.png" alt="Miễn Phí">
				<b>Miễn Phí</b>
				<p class="">Vận Chuyển</p>
			</div>
		</th>
		<th>
			<div class="table-service">
				<img src="../images/t488b8.png" alt="Showroom">
				<b>Showroom</b>
				<p class="">Toàn Quốc</p>
			</div>
		</th>
	</table>
</div>



<div class="link-collection-home">
	<div class="container">
		<div class="col-img-first">
			<a href="lon-viet-nam.html">
				<img src="../images/4388b8.png" title="" alt="LỢN RỪNG LAI.com">
			</a>
		</div>
		<div class="col-img-second">
			<a href="goc-bao-chi.html">
				<img src="../images/gocnhinbaochi.jpg" title="" alt="LỢN RỪNG LAI.com">
			</a>
		</div>
		<div class="col-img-third">
			<a href="lon-viet-nam.html">
				<img src="../images/2888b8.jpg" title="" alt="LỢN RỪNG LAI.com">
			</a>
		</div>
		<div class="col-img-four">
			<a href="nau-co.html">
				<img src="../images/2988b8.jpg" title="" alt="LỢN RỪNG LAI.com">
			</a>
		</div>
	</div>
</div>



<div class="main-col">
	<div class="container">
		<div class="slider-items-products">
			<!-- Best Seller Slider -->
			<div class="new_title center">
				<h2><a href="/san-pham">ĐẶC SẢN LỢN NGUYÊN CON</a></h2>
			</div>
			<div class="collection-link">
				<a href="/san-pham">Xem thêm <img src="../images/i188b8.gif" alt="ĐẶC SẢN LỢN NGUYÊN CON" title=""></a>
			</div>
			<div class="row ahihi">
				@foreach($dacsannguyencon as $dsnc)
				<div class="col-md-3 col-sm-6 col-xs-6 width-mb-100 super-pig">
					<div class="item">

						<div class="col-item">

							<div class="sale-label sale-top-right">Sale</div>

							<div class="item-inner">
								<div class="product-wrapper">
									<div class="thumb-wrapper">
										<a href="/chi-tiet-san-pham/{{$dsnc->slug}}"><img src="/storage/{{$dsnc->thumbnail}}" class="img-fix" alt="{{$dsnc->title}}"></a>
									</div>

								</div>
								<div class="item-info">
									<div class="info-inner">
										<div class="item-title">
											<h3> <a href="/chi-tiet-san-pham/{{$dsnc->slug}}" title="{{$dsnc->title}}">{{$dsnc->title}}</a> </h3>
										</div>
										<div class="item-content">

											<div class="item-price">

												<div class="price-box">

													<p class="old-price">
														<span class="price-label">Giá cũ:</span>
														<span class="price" id="old-price">{{$dsnc->masp}}đ</span>
													</p>
													<p class="special-price">
														<span class="price-label">Giá khuyến mại</span>
														<span class="price">{{$dsnc->price}}đ</span>
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
				

				<!-- End Best Seller Slider -->
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="slider-items-products">
		<div class="new_title center">
			<h2><a href="/san-pham">SẢN PHẨM HƯỚNG HỮU CƠ</a></h2>
		</div>
		<div class="collection-link">
			<a href="/san-pham">Xem thêm <img src="../images/i188b8.gif" alt="SẢN PHẨM HƯỚNG HỮU CƠ" title=""></a>
		</div>
		<div class="row">
			@foreach($sanphamhuonghuuco as $sphhc)
			<div class="col-md-3 col-sm-6 col-xs-6 width-mb-100">
				<div class="item">

					<div class="col-item">

						<div class="item-inner">
							<div class="product-wrapper">
								<div class="thumb-wrapper">
									<a href="/chi-tiet-san-pham/{{$sphhc->slug}}"><img src="/storage/{{$sphhc->thumbnail}}" class="img-fix" alt="{{$sphhc->title}}"></a>
								</div>

							</div>
							<div class="item-info">
								<div class="info-inner">
									<div class="item-title">
										<h3> <a href="/chi-tiet-san-pham/{{$sphhc->slug}}" title="{{$sphhc->title}}">{{$sphhc->title}}</a> </h3>
									</div>
									<div class="item-content">

										<div class="item-price">

											<div class="price-box">


												<a href="/chi-tiet-san-pham/{{$sphhc->slug}}"><span class="price"><i><b>{{$sphhc->price}}</b></i> </span></a>



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


<div class="section-event">
	<div class="container">
		<div class="row">

			<div class="col-event-1">
				<div class="new-title-2">
					<h2><span>Video&nbsp;</span>Nổi Bật</h2>
				</div>
				
				<a type="button" href="#" data-toggle="modal" data-target="#myModal">
					<img src="../images/trangtrainuoiheo.jpg" style="width: 100%; height: 418px;" alt="Video" title="">
				</a>
				
			</div>


			<div class="col-event-2 hidden-xs">

				<div class="new_title2 center">
					<h2><span>EVENT</span> - SỰ KIỆN</h2>
				</div>

				<div class="flexslider2">
					<ul class="slides">
						<li>
							<a href="#">
								<img src="../images/g10388b8.jpg" alt="LỢN RỪNG LAI.com" />
							</a>
						</li>
						<li>
							<a href="#">
								<img src="../images/g10488b8.jpg" alt="LỢN RỪNG LAI.com" />
							</a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="pr-module-box" style="display: none">
	<div class="pr-module-title">
	</div>
	<div class="pr-slide-wrap">
		<ul class="pr-list-product-slide">
		</ul>
	</div>
	<div class="pr-slide">
	</div>
</div>
<script>
	window.productRecentVariantId = [];
	window.productRecentId = "";
</script>
<link href="../css/lonrunglai/ProductRecentStyle.css" rel="stylesheet" />


<link href="../css/lonrunglai/bpr-products-module88b8.css" rel="stylesheet" type="text/css" media="all" />
<div class="bizweb-product-reviews-module"></div>
@endsection