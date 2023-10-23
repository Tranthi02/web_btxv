@extends('layout.trangchu')
@section('content')
<main id="main" class="">
			<div id="content" role="main" class="content-area">
				<div class="slider-wrapper relative " id="slider-290651330">
					<div class="slider slider-nav-dots-simple slider-nav-simple slider-nav-normal slider-nav-light slider-style-normal"
						data-flickity-options='{
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

						<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1056405802">
							<div class="img-inner image-cover dark" style="padding-top:23%;">
								<img width="1920" height="450" src="wp-content/uploads/2019/01/sldier2.jpg"
									class="attachment-original size-original" alt=""
									srcset="http://matong.langsonweb.com/wp-content/uploads/2019/01/sldier2.jpg 1920w, http://matong.langsonweb.com/wp-content/uploads/2019/01/sldier2-300x70.jpg 300w, http://matong.langsonweb.com/wp-content/uploads/2019/01/sldier2-768x180.jpg 768w, http://matong.langsonweb.com/wp-content/uploads/2019/01/sldier2-1024x240.jpg 1024w"
									sizes="(max-width: 1920px) 100vw, 1920px" />
							</div>

							<style scope="scope">
								#image_1056405802 {
									width: 100%;
								}
							</style>
						</div>

						<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2118287654">
							<div class="img-inner image-cover dark" style="padding-top:23%;">
								<img width="1920" height="450" src="wp-content/uploads/2019/01/sldier1.jpg"
									class="attachment-original size-original" alt=""
									srcset="http://matong.langsonweb.com/wp-content/uploads/2019/01/sldier1.jpg 1920w, http://matong.langsonweb.com/wp-content/uploads/2019/01/sldier1-300x70.jpg 300w, http://matong.langsonweb.com/wp-content/uploads/2019/01/sldier1-768x180.jpg 768w, http://matong.langsonweb.com/wp-content/uploads/2019/01/sldier1-1024x240.jpg 1024w"
									sizes="(max-width: 1920px) 100vw, 1920px" />
							</div>

							<style scope="scope">
								#image_2118287654 {
									width: 100%;
								}
							</style>
						</div>

					</div>

					<div class="loading-spin dark large centered"></div>

					<style scope="scope">
					</style>
				</div><!-- .ux-slider-wrapper -->


				<section class="section banner-section" id="section_161713713">
					<div class="bg section-bg fill bg-fill  bg-loaded" >
					</div><!-- .section-bg -->

					<div class="section-content relative">

						<div class="row" id="row-452236069">
							@foreach($banner as $bn)
							<div class="col medium-4 small-12 large-4">
								<div class="col-inner">

									<div class="banner has-hover bg-zoom bg-overlay-add" id="banner-915894807" >
										<div class="banner-inner fill">
											<div class="banner-bg fill">
												<div class="bg fill bg-fill " style = "background-image: url(/storage/{{$bn->thumbnail}})"></div>
												<div class="overlay"></div>
											</div><!-- bg-layers -->
											<div class="banner-layers container">
												<div class="fill banner-link"></div>
												<div id="text-box-840886463"
													class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
													<div class="text dark">

														<div class="text-inner text-center">

															<h3 class="alt-font"><span
																	style="color: #ffffff; font-size: 170%;">Hoàn
																	toàn<br />tự nhiên</span></h3>
														</div>
													</div><!-- text-box-inner -->

													<style scope="scope">
														#text-box-840886463 {
															width: 93%;
														}

														#text-box-840886463 .text {
															font-size: 100%;
														}
													</style>
												</div><!-- text-box -->

											</div><!-- .banner-layers -->
										</div><!-- .banner-inner -->

										<div class="height-fix is-invisible"><img width="369" height="206"
												src=""
												class="attachment-original size-original" alt=""
												sizes="(max-width: 369px) 100vw, 369px" /></div>

										<style scope="scope">
											/* #banner-915894807 .bg.bg-loaded {
												background-image: url("/storage/{{$bn->thumbnail}}");
											} */

											#banner-915894807 .overlay {
												background-color: rgba(0, 0, 0, 0.24);
											}
										</style>
									</div><!-- .banner -->


								</div>
							</div>
							@endforeach
							
						</div>
					</div><!-- .section-content -->


					<style scope="scope">
						#section_161713713 {
							padding-top: 30px;
							padding-bottom: 30px;
							background-color: rgb(255, 255, 255);
						}
					</style>
				</section>

				<section class="section san-pham" id="section_30569405">
					<div class="bg section-bg fill bg-fill  bg-loaded">





					</div><!-- .section-bg -->

					<div class="section-content relative">

						<div class="row" id="row-592891105">
							<div class="col small-12 large-12">
								<div class="col-inner text-center">
									<div class="container section-title-container">
										<h3 class="section-title section-title-center"><b></b><span
												class="section-title-main"
												style="font-size:150%;color:rgb(92, 34, 0);">SẢN PHẨM CỦA CHÚNG
												TÔI</span><b></b></h3>
									</div><!-- .section-title -->
									<p style="text-align: center;">
									</p>
									<div class="gap-element" style="display:block; height:auto; padding-top:10px"
										class="clearfix"></div>


									<div class="row large-columns-4 medium-columns- small-columns-2 row-normal">


									@foreach($baiviet_1 as $bv_1)
										<div class="col">
										
											<div class="col-inner">
												
												
												<div class="product-small box has-hover box-normal box-text-bottom">
													<div class="box-image">
														<div class="image-overlay-add image-cover"
															style="padding-top:105%;">
															<a href="/chi-tiet-san-pham/{{$bv_1->slug}}">
																<img width="241" height="270"
																	src="/storage/{{$bv_1->thumbnail}}"
																	class="lazy-load show-on-hover absolute fill hide-for-small back-image"
																	alt="" />
																	<img width="500" height="447"
																	src="/storage/{{$bv_1->thumbnail}}"
																	class="attachment-original size-original" alt=""
																	sizes="(max-width: 500px) 100vw, 500px" />
															 </a>
															<div class="overlay fill"
																style="background-color: rgba(255, 255, 255, 0.28)">
															</div>
														</div>
														<div class="image-tools top right show-on-hover">
														</div>
														<div
															class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
														</div>
													</div><!-- box-image -->

													<div class="box-text text-center">
														<div class="title-wrapper">
															<p class="name product-title"><a style="display: block;
  	display: -webkit-box;
  	height: 16px*1.3*3;
  	font-size: 16px;
  	line-height: 1.3;
  	-webkit-line-clamp: 1;  /* số dòng hiển thị */
  	-webkit-box-orient: vertical;
  	overflow: hidden;
  	text-overflow: ellipsis;
  	margin-top:10px;"
																	href="/chi-tiet-san-pham/{{$bv_1->slug}}">{{$bv_1->title}}</a></p>
														</div>
														<div class="price-wrapper">
															<span class="price"><del><span
																		class="woocommerce-Price-amount amount">{{$bv_1->masp}}<span
																			class="woocommerce-Price-currencySymbol">&#8363;</span></span></del>
																<ins><span
																		class="woocommerce-Price-amount amount">{{$bv_1->price}}<span
																			class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
														</div>
														<div class="add-to-cart-button"><a
																href="/chi-tiet-san-pham/{{$bv_1->slug}}" rel="nofollow"
																
																class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Xem chi tiết</a></div>
													</div><!-- box-text -->
												</div><!-- box -->
												
											</div><!-- .col-inner -->
											
										</div><!-- col -->
										@endforeach

										</div>	
									<div class="gap-element" style="display:block; height:auto; padding-top:12px"
										class="clearfix"></div>
									
								</div>
							</div>
						</div>
					</div><!-- .section-content -->


					<style scope="scope">
						#section_30569405 {
							padding-top: 30px;
							padding-bottom: 30px;
							background-color: rgb(255, 253, 241);
						}
					</style>
				</section>


				<div style="margin-top: 60px;" class="banner has-hover" id="banner-288402974">
					<div class="banner-inner fill">
						<div class="banner-bg fill">
							<div class="bg fill bg-fill "></div>

						</div><!-- bg-layers -->
						<div class="banner-layers container">
							<div class="fill banner-link"></div>
							<div class="img has-hover x10 md-x10 lg-x10 y100 md-y100 lg-y100" id="image_391026270">
								<div data-animate="bounceInLeft">
									<div class="img-inner dark" style="margin-top:20px;">
										<img width="754" height="464" src="wp-content/uploads/2019/01/honey1.jpg"
											class="attachment-original size-original" alt=""
											srcset="http://matong.langsonweb.com/wp-content/uploads/2019/01/honey1.jpg 754w, http://matong.langsonweb.com/wp-content/uploads/2019/01/honey1-300x185.jpg 300w"
											sizes="(max-width: 754px) 100vw, 754px" />
									</div>
								</div>
								<style scope="scope">
									#image_391026270 {
										width: 51%;
									}
								</style>
							</div>

							<div class="img has-hover x90 md-x90 lg-x90 y50 md-y50 lg-y50" id="image_2103143293">
								<div data-animate="bounceInRight">
									<div class="img-inner dark">
										<img width="848" height="303" src="wp-content/uploads/2019/01/img2.png"
											class="attachment-original size-original" alt=""
											srcset="http://matong.langsonweb.com/wp-content/uploads/2019/01/img2.png 848w, http://matong.langsonweb.com/wp-content/uploads/2019/01/img2-300x107.png 300w, http://matong.langsonweb.com/wp-content/uploads/2019/01/img2-768x274.png 768w"
											sizes="(max-width: 848px) 100vw, 848px" />
									</div>
								</div>
								<style scope="scope">
									#image_2103143293 {
										width: 45%;
									}
								</style>
							</div>

						</div><!-- .banner-layers -->
					</div><!-- .banner-inner -->


					<style scope="scope">
						#banner-288402974 {
							padding-top: 20%;
							background-color: rgb(255, 255, 255);
						}
					</style>
				</div><!-- .banner -->


				<section class="section san-pham" id="section_559963117">
					<div class="bg section-bg fill bg-fill  bg-loaded">





					</div><!-- .section-bg -->

					<div class="section-content relative">

						<div class="row" id="row-1862027893">
							<div class="col small-12 large-12">
								<div class="col-inner text-center">
									<div class="container section-title-container">
										<h3 class="section-title section-title-center"><b></b><span
												class="section-title-main"
												style="font-size:150%;color:rgb(92, 34, 0);">SẢN PHẨM LÀM ĐẸP CỦA CHÚNG
												TÔI</span><b></b></h3>
									</div><!-- .section-title -->
									<p style="text-align: center;">Sản phẩm làm đẹp của chúng tôi là các sản phẩm 100%
										tự nhiên</p>
									<div class="gap-element" style="display:block; height:auto; padding-top:10px"
										class="clearfix"></div>


									<div class="row large-columns-4 medium-columns- small-columns-2 row-normal">


										@foreach($baiviet_2 as $bv_2)
										<div class="col">
											<div class="col-inner">

												
												<div class="product-small box has-hover box-normal box-text-bottom">
													<div class="box-image">
														<div class="image-overlay-add image-cover"
															style="padding-top:105%;">
															<a
																href="/chi-tiet-san-pham/{{$bv_2->slug}}">
																<img width="241" height="270"
																	src="/storage/{{$bv_2->thumbnail}}"
																	class="lazy-load show-on-hover absolute fill hide-for-small back-image"
																	alt="" />
																	<img width="500" height="447"
																	src="/storage/{{$bv_2->thumbnail}}"
																	class="attachment-original size-original" alt=""
																	sizes="(max-width: 500px) 100vw, 500px" /> </a>
															<div class="overlay fill"
																style="background-color: rgba(255, 255, 255, 0.28)">
															</div>
														</div>
														<div class="image-tools top right show-on-hover">
														</div>
														<div
															class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
														</div>
													</div><!-- box-image -->

													<div class="box-text text-center">
														<div class="title-wrapper">
															<p class="name product-title"><a style="display: block;
  	display: -webkit-box;
  	height: 16px*1.3*3;
  	font-size: 16px;
  	line-height: 1.3;
  	-webkit-line-clamp: 1;  /* số dòng hiển thị */
  	-webkit-box-orient: vertical;
  	overflow: hidden;
  	text-overflow: ellipsis;
  	margin-top:10px;"
																	href="/chi-tiet-san-pham/{{$bv_2->slug}}">{{$bv_2->title}}</a></p>
														</div>
														<div class="price-wrapper">
															<span class="price"><del><span
																		class="woocommerce-Price-amount amount">{{$bv_2->masp}}<span
																			class="woocommerce-Price-currencySymbol">&#8363;</span></span></del>
																<ins><span
																		class="woocommerce-Price-amount amount">{{$bv_2->price}}<span
																			class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
														</div>
														<div class="add-to-cart-button"><a
																href="/chi-tiet-san-pham/{{$bv_2->slug}}" rel="nofollow"
																
																class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Xem chi tiết</a></div>
													</div><!-- box-text -->
												</div><!-- box -->
											</div><!-- .col-inner -->
										</div><!-- col -->
										@endforeach

										

									</div>
									<div class="gap-element" style="display:block; height:auto; padding-top:12px"
										class="clearfix"></div>
									

								</div>
							</div>
						</div>
					</div><!-- .section-content -->


					<style scope="scope">
						#section_559963117 {
							padding-top: 30px;
							padding-bottom: 30px;
							background-color: rgb(255, 253, 241);
						}
					</style>
				</section>

				<section class="section san-pham sp-noi-bat" id="section_1783294833">
					<div class="bg section-bg fill bg-fill  ">


						<div class="section-bg-overlay absolute fill"></div>


					</div><!-- .section-bg -->

					<div class="section-content relative">

						<div class="row" id="row-170791824">
							<div class="col small-12 large-12">
								<div class="col-inner text-center">
									<div class="container section-title-container">
										<h3 class="section-title section-title-center"><b></b><span
												class="section-title-main"
												style="font-size:150%;color:rgb(92, 34, 0);">SẢN PHẨM THỰC PHẨM CHỨC
												NĂNG CỦA CHÚNG TÔI</span><b></b></h3>
									</div><!-- .section-title -->
									<p style="text-align: center;">Sản phẩm thực phẩm chức năng của chúng tôi là các sản
										phẩm tốt cho sức khỏe</p>
									<div class="gap-element" style="display:block; height:auto; padding-top:10px"
										class="clearfix"></div>


									<div class="row large-columns-4 medium-columns- small-columns-2 row-small slider row-slider slider-nav-simple slider-nav-outside slider-nav-light slider-nav-push"
										data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>



										@foreach($baiviet_3 as $bv_3)
										<div class="col">
											<div class="col-inner">

												
												<div class="product-small box has-hover box-normal box-text-bottom">
													<div class="box-image">
														<div class="image-overlay-add image-cover"
															style="padding-top:105%;">
															<a
																href="/chi-tiet-san-pham/{{$bv_3->slug}}">
																<img width="241" height="270"
																	src="/storage/{{$bv_3->thumbnail}}"
																	class="lazy-load show-on-hover absolute fill hide-for-small back-image"
																	alt="" />
																	<img width="500" height="447"
																	src="/storage/{{$bv_3->thumbnail}}"
																	class="attachment-original size-original" alt=""
																	sizes="(max-width: 500px) 100vw, 500px" /> </a>
															<div class="overlay fill"
																style="background-color: rgba(255, 255, 255, 0.28)">
															</div>
														</div>
														<div class="image-tools top right show-on-hover">
														</div>
														<div
															class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
														</div>
													</div><!-- box-image -->

													<div class="box-text text-center">
														<div class="title-wrapper">
															<p class="name product-title"><a style="display: block;
  	display: -webkit-box;
  	height: 16px*1.3*3;
  	font-size: 16px;
  	line-height: 1.3;
  	-webkit-line-clamp: 1;  /* số dòng hiển thị */
  	-webkit-box-orient: vertical;
  	overflow: hidden;
  	text-overflow: ellipsis;
  	margin-top:10px;"
																	href="/chi-tiet-san-pham/{{$bv_3->slug}}">{{$bv_3->title}}</a></p>
														</div>
														<div class="price-wrapper">
															<span class="price"><del><span
																		class="woocommerce-Price-amount amount">{{$bv_3->masp}}<span
																			class="woocommerce-Price-currencySymbol">&#8363;</span></span></del>
																<ins><span
																		class="woocommerce-Price-amount amount">{{$bv_3->price}}<span
																			class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
														</div>
														<div class="add-to-cart-button"><a
																href="/chi-tiet-san-pham/{{$bv_3->slug}}" rel="nofollow"
																
																class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Xem chi tiết</a></div>
													</div><!-- box-text -->
												</div><!-- box -->
											</div><!-- .col-inner -->
										</div><!-- col -->
										@endforeach

									</div>
								</div>
							</div>
						</div>
					</div><!-- .section-content -->


					<style scope="scope">
						#section_1783294833 {
							padding-top: 24px;
							padding-bottom: 24px;
						}

						#section_1783294833 .section-bg-overlay {
							background-color: rgba(255, 255, 255, 0.1);
						}

						#section_1783294833 .section-bg.bg-loaded {
							background-image: url(wp-content/uploads/2019/01/BS-SP.jpg);
						}
					</style>
				</section>

				<section class="section tin-tuc" id="section_828078683">
					<div class="bg section-bg fill bg-fill  bg-loaded">





					</div><!-- .section-bg -->

					<div class="section-content relative">

						<div class="row" id="row-1750277356">
							<div class="col cot8 medium-8 small-12 large-8">
								<div class="col-inner">
									<div class="container section-title-container">
										<h3 class="section-title section-title-center"><b></b><span
												class="section-title-main"
												style="font-size:125%;color:rgb(69, 0, 0);">TIN TỨC - BÍ QUYẾT LÀM
												ĐẸP</span><b></b></h3>
									</div><!-- .section-title -->
									<div class="gap-element" style="display:block; height:auto; padding-top:18px"
										class="clearfix"></div>


									<div class="row large-columns-1 medium-columns-1 small-columns-1 row-small">
										@foreach($baiviet_4 as $bv4)
										<div class="col post-item">
											<div class="col-inner">
												<a href="/chi-tiet-san-pham/{{$bv4->slug}}"
													class="plain">
													<div
														class="box box-vertical box-text-middle box-blog-post has-hover">
														<div class="box-image" style="width:30%;">
															<div class="image-overlay-add image-cover"
																style="padding-top:78%;">
																<img width="500" height="447"
																	src="/storage/{{$bv4->thumbnail}}"
																	class="lazy-load attachment-original size-original wp-post-image"
																	alt="" srcset=""
																	sizes="(max-width: 500px) 100vw, 500px" />
																<div class="overlay"
																	style="background-color: rgba(255, 255, 255, 0.28)">
																</div>
															</div>
														</div><!-- .box-image -->
														<div class="box-text text-left">
															<div class="box-text-inner blog-post-inner">


																<h5 class="post-title is-large ">{{$bv4->title}}</h5>
																<div class="post-meta is-small op-8">{{$bv4->created_at}}</div>
																<div class="is-divider"></div>
																<!-- <p style="display: block;
																		display: -webkit-box;
																		height: 16px*1.3*3;
																		font-size: 16px;
																		line-height: 1.3;
																		-webkit-line-clamp: 1;  /* số dòng hiển thị */
																		-webkit-box-orient: vertical;
																		overflow: hidden;
																		text-overflow: ellipsis;
																		margin-top:10px;" class="from_the_blog_excerpt ">{!!$bv4->content!!}</p> -->



															</div><!-- .box-text-inner -->
														</div><!-- .box-text -->
													</div><!-- .box -->
												</a><!-- .link -->
											</div><!-- .col-inner -->
										</div><!-- .col -->
										@endforeach
										
									</div>
								</div>
							</div>
							<div class="col cot4 medium-4 small-12 large-4">
								<div class="col-inner">
									<div role="form" class="wpcf7" id="wpcf7-f244-p2-o1" lang="vi" dir="ltr">
										<div class="screen-reader-response"></div>
										<form action="http://matong.langsonweb.com/#wpcf7-f244-p2-o1" method="post"
											class="wpcf7-form" novalidate="novalidate">
											<div style="display: none;">
												<input type="hidden" name="_wpcf7" value="244" />
												<input type="hidden" name="_wpcf7_version" value="5.1.1" />
												<input type="hidden" name="_wpcf7_locale" value="vi" />
												<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f244-p2-o1" />
												<input type="hidden" name="_wpcf7_container_post" value="2" />
												<input type="hidden" name="g-recaptcha-response" value="" />
											</div>
											
											<div class="wpcf7-response-output wpcf7-display-none"></div>
										</form>
									</div>
									<div class="video video-fit mb" style="padding-top:50%;  padding-bottom: 50%;">
										<p>
											<video src="./images/video.mp4" controls></video>
											</p>
									</div>
									
								</div>
							</div>
						</div>
					</div><!-- .section-content -->


					<style scope="scope">
						#section_828078683 {
							padding-top: 30px;
							padding-bottom: 30px;
							background-color: rgb(243, 243, 243);
						}
					</style>
				</section>



			</div>



		</main>
@endsection