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
						<h1 class="entry-title mb uppercase">Liên hệ</h1>
					</header><!-- .entry-header -->
		
	</div></div>
	</div>
	<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9419952749577!2d105.76831301540248!3d21.03500679293985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad407211b1d9%3A0xad86ceae25e4fb06!2zR8OgIENo4bqheSBC4buZ!5e0!3m2!1svi!2sus!4v1623232667970!5m2!1svi!2sus" width="100%" height="450" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe></p>
	<div style="display: none;"
		class="kk-star-ratings kksr-valign-bottom kksr-align-right "
		data-id="451"
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
		<div class="kksr-stars-active" style="width: 140px;">
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
				<strong class="kksr-score">5</strong>
			<span class="kksr-muted">/</span>
			<strong>5</strong>
			<span class="kksr-muted">(</span>
			<strong class="kksr-count">1</strong>
			<span class="kksr-muted">
				bình chọn        </span>
			<span class="kksr-muted">)</span>
		</div>
	</div>
	
							
													</div><!-- .col-inner -->
			</div><!-- .large-12 -->
		</div><!-- .row -->
	</div>
	
	
	</main>
@endsection