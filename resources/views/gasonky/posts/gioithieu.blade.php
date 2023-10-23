@extends('gasonky.views.layouts.trangchu')
@section('content')

<div id="content" class="content-area page-wrapper" role="main">
@foreach($gioithieu as $gt)
	<div class="row row-main">
	     
		<div class="large-12 col">
			<div class="col-inner">
				
								<header class="entry-header">
					<h1 class="entry-title mb uppercase">Giới thiệu</h1>
				</header><!-- .entry-header -->
				
														
						
  <div class="banner has-hover" id="banner-172705852">
          <div class="banner-inner fill">
        <div class="banner-bg fill" >
            <div class="bg fill bg-fill "></div>
                                    
                    </div><!-- bg-layers -->
        <div class="banner-layers container">
            <div class="fill banner-link"></div>            
   <div id="text-box-1420135173" class="text-box banner-layer x5 md-x5 lg-x5 y50 md-y50 lg-y50 res-text">
                                <div class="text dark">
              
              <div class="text-inner text-center">
                  
<h3 class="uppercase" style="text-align: left;"><span style="color: #000000;"><strong>{{$gt->title}}</strong></span></h3>
<p style="text-align: left;"><span style="color: #000000;">{{$gt->excerpt}}</span></p>
              </div>
           </div><!-- text-box-inner -->
                            
<style scope="scope">

#text-box-1420135173 {
  width: 60%;
}
#text-box-1420135173 .text {
  font-size: 100%;
}
</style>
    </div><!-- text-box -->
 
        </div><!-- .banner-layers -->
      </div><!-- .banner-inner -->

            
<style scope="scope">

#banner-172705852 {
  padding-top: 324px;
}
#banner-172705852 .bg.bg-loaded {
  background-image: url(./images/about-banner.png);
}
</style>
  </div><!-- .banner -->


<div class="wp-block-columns">
<div class="wp-block-column">
<p>{!! $gt->content !!}</p>
</div>
</div>
<div class="wp-block-columns">
<div class="wp-block-column"></div>
</div>
<div style="display: none;"
    class="kk-star-ratings kksr-valign-bottom kksr-align-right "
    data-id="445"
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
        <strong class="kksr-count">4</strong>
        <span class="kksr-muted">
            bình chọn        </span>
        <span class="kksr-muted">)</span>
    </div>
</div>

						
												</div><!-- .col-inner -->
		</div><!-- .large-12 -->
	</div><!-- .row -->
</div>
@endforeach


</main><!-- #main -->


@endsection