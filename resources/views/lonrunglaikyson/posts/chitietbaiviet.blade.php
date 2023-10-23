@extends('lonrunglaikyson.views.layouts.trangchu')
@section('content')
@if($chitietbv)
<div class="breadcrumb">
    <div class="container">

        <div class="c-bread">
            <ul class="list-unstyled">
                <li style="padding-left:0"><a href="index.html">
                        <h1>Trang chủ</h1>
                    </a></li>

                <li><a href="tin-tuc.html">
                        <h1>Tin tức</h1>
                    </a></li>

            </ul>
        </div>

    </div>
</div>





<section class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-md-9 col-sm-12 col-xs-12">
                <div class="blog-wrapper" id="main">
                    <div class="site-content" id="primary">
                        <div role="main" id="content">
                            <article class="blog_entry clearfix wow bounceInLeft animated">
                                <header class="blog_entry-header clearfix">
                                    <div class="blog_entry-header-inner">
                                        <h2 class="page-title">{{$chitietbv->title}}</h2>
                                    </div>
                                    <!--blog_entry-header-inner-->
                                    <div class="entry-content">
                                        <p>&nbsp;</p>
                                        <p>
                                            <meta charset="utf-8" />
                                        </p>
                                        <p dir="ltr" style="text-align: justify;">{!!$chitietbv->content!!} <a href="cach-nhan-biet-lon-rung-nguyen-con-tai-hai-phong-chuan.html"><strong>giá lợn rừng nguyên con chuẩn ở Hải Phòng</strong></a> sẽ giúp bạn tránh được việc mua thịt lợn rừng với giá trên trời.</p>
                                        
                                       
                                    </div>

                                    

                                    
                                </header>
                                
                            </article>

                            

                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-right sidebar sidebar-blog col-md-3 hidden-xs hidden-sm wow bounceInRight animated">
                <div role="complementary" class="widget_wrapper13" id="secondary">
                    <div class="popular-posts widget widget__sidebar" id="recent-posts-4">
                        
                        <h3 class="widget-title">Bài viết khác</h3>
                        <div class="widget-content">
                            <ul class="posts-list unstyled clearfix">

                            </ul>
                        </div>
                        <!--widget-content-->
                    </div>

                    <!-- Banner Ad Block -->

                    <div id="bw-statistics" class="bw-statistics"></div>
                </div>

            </aside>
        </div>
    </div>
</section>
@endif
@endsection