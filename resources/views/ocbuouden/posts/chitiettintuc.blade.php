@extends('ocbuouden.views.layouts.trangchu')
@section('content')
@if($baivietchitiet)
<main id="main" class="">
    <div id="content" class="blog-wrapper blog-single page-wrapper">
        <div class="row row-large row-divided">
            <div class="post-sidebar large-3 col">
                <div id="secondary" class="widget-area" role="complementary">
                    <!-- <aside id="nav_menu-3" class="widget widget_nav_menu">
                        <span class="widget-title"><span>Danh mục sản phẩm</span></span>
                        <div class="is-divider small"></div>
                        <div class="menu-danh-muc-san-pham-container">
                            <ul id="menu-danh-muc-san-pham" class="menu">
                                <li id="menu-item-66" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-66">
                                    <a href="../danh-muc/oc-giong/index.html"><noscript><img src="../wp-content/uploads/2017/11/dot-icon-copy.png" class="_mi _before _svg" aria-hidden="true" style="width: 0.9em" /></noscript><img src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2017/11/dot-icon-copy.png" class="lazyload _mi _before _svg" aria-hidden="true" style="width: 0.9em" /><span>Ốc giống</span></a>
                                </li>
                                <li id="menu-item-65" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-65">
                                    <a href="../danh-muc/oc-bo-me/index.html"><noscript><img src="../wp-content/uploads/2017/11/dot-icon-copy.png" class="_mi _before _svg" aria-hidden="true" style="width: 0.9em" /></noscript><img src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2017/11/dot-icon-copy.png" class="lazyload _mi _before _svg" aria-hidden="true" style="width: 0.9em" /><span>Ốc bố mẹ</span></a>
                                </li>
                                <li id="menu-item-67" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67">
                                    <a href="../danh-muc/oc-nhoi-thuong-pham/index.html"><noscript><img src="../wp-content/uploads/2017/11/dot-icon-copy.png" class="_mi _before _svg" aria-hidden="true" style="width: 0.9em" /></noscript><img src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2017/11/dot-icon-copy.png" class="lazyload _mi _before _svg" aria-hidden="true" style="width: 0.9em" /><span>Ốc nhồi thương phẩm</span></a>
                                </li>
                            </ul>
                        </div>
                    </aside> -->
                    <aside id="woocommerce_products-2" class="widget woocommerce widget_products">
                        <span class="widget-title"><span>Sản phẩm bán chạy</span></span>
                        <div class="is-divider small"></div>
                        <ul class="product_list_widget">
                            @foreach($sanphambanchay as $spbc)
                            <li>
                                <a href="/chi-tiet-san-pham/{{$spbc->slug}}">
                                    <noscript><img style="width:100px; height:100px;" src="/storage/{{$spbc->thumbnail}}" class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" srcset="
                                    /storage/{{$spbc->thumbnail}}
                            " sizes="(max-width: 100px) 100vw, 100px" /></noscript><img style="width:100px; height:100px;" src="/storage/{{$spbc->thumbnail}}" data-src="/storage/{{$spbc->thumbnail}}" class="lazyload attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" data-sizes="(max-width: 100px) 100vw, 100px" />
                                    <span class="product-title">{{$spbc->titlle}}</span>
                                </a>
                                
                                <ins><span class="woocommerce-Price-amount amount"><bdi>{{$spbc->price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                    <aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">
                        <span class="widget-title"><span>Bài viết &#8211; Tin tức</span></span>
                        <div class="is-divider small"></div>
                        <ul>
                            @foreach($tinlienquan as $tlq)
                            <li class="recent-blog-posts-li">
                                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                    <div class="flex-col mr-half">
                                        <div class="badge post-date badge-square">
                                            <div class="badge-inner bg-fill" style="
                                background: url(/storage/{{$tlq->thumbnail}});
                                border: 0;
                              "></div>
                                        </div>
                                    </div>
                                    <div class="flex-col flex-grow">
                                        <a href="/chi-tiet-tin-tuc/{{$tlq->slug}}" title="{{$tlq->title}}">{{$tlq->title}}</a>
                                        <span class="post_comments op-7 block is-xsmall"><a href="/chi-tiet-tin-tuc/{{$tlq->slug}}"></a></span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="large-9 col medium-col-first">
                <article id="post-1760" class="post-1760 post type-post status-publish format-standard has-post-thumbnail hentry category-tai-lieu-huong-dan-chan-nuoi category-tin-tuc-bai-viet">
                    <div class="article-inner">
                        <header class="entry-header">
                            <div class="entry-header-text entry-header-text-top text-left">
                                <!-- <h6 class="entry-category is-xsmall">
                                    <a href="../category/tai-lieu-huong-dan-chan-nuoi/index.html" rel="category tag">Tài liệu hướng dẫn chăn nuôi</a>,
                                    <a href="../category/tin-tuc-bai-viet/index.html" rel="category tag">Tin tức - bài viết</a>
                                </h6> -->
                                <h1 class="entry-title">
                                    {{$baivietchitiet->title}}
                                </h1>
                                <div class="entry-divider is-divider small"></div>
                                <div class="entry-meta uppercase is-xsmall">
                                    <!-- <span class="posted-on">Posted on
                                        <a href="index.html" rel="bookmark"><time class="entry-date published" datetime="2022-07-05T15:22:08+07:00">05/07/2022</time><time class="updated" datetime="2022-07-05T15:24:06+07:00">05/07/2022</time></a></span><span class="byline">
                                        by
                                        <span class="meta-author vcard"><a class="url fn n" href="../author/admin/index.html">admin</a></span></span> -->
                                </div>
                            </div>
                            <!-- <div class="entry-image relative">
                                <a href="index.html">
                                    <noscript><img width="1020" height="510" src="../wp-content/uploads/2022/06/32-1024x512.jpg" class="attachment-large size-large wp-post-image" alt="" srcset="
                              https://traiocgiong.com/wp-content/uploads/2022/06/32-1024x512.jpg  1024w,
                              https://traiocgiong.com/wp-content/uploads/2022/06/32-300x150.jpg    300w,
                              https://traiocgiong.com/wp-content/uploads/2022/06/32-768x384.jpg    768w,
                              https://traiocgiong.com/wp-content/uploads/2022/06/32-1536x768.jpg  1536w,
                              https://traiocgiong.com/wp-content/uploads/2022/06/32-2048x1024.jpg 2048w,
                              https://traiocgiong.com/wp-content/uploads/2022/06/32-600x300.jpg    600w
                            " sizes="(max-width: 1020px) 100vw, 1020px" /></noscript><img width="1020" height="510" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201020%20510%22%3E%3C/svg%3E" data-src="https://traiocgiong.com/wp-content/uploads/2022/06/32-1024x512.jpg" class="lazyload attachment-large size-large wp-post-image" alt="" data-srcset="https://traiocgiong.com/wp-content/uploads/2022/06/32-1024x512.jpg 1024w, https://traiocgiong.com/wp-content/uploads/2022/06/32-300x150.jpg 300w, https://traiocgiong.com/wp-content/uploads/2022/06/32-768x384.jpg 768w, https://traiocgiong.com/wp-content/uploads/2022/06/32-1536x768.jpg 1536w, https://traiocgiong.com/wp-content/uploads/2022/06/32-2048x1024.jpg 2048w, https://traiocgiong.com/wp-content/uploads/2022/06/32-600x300.jpg 600w" data-sizes="(max-width: 1020px) 100vw, 1020px" /></a>
                                <div class="badge absolute top post-date badge-square">
                                    <div class="badge-inner">
                                        <span class="post-date-day">05</span><br />
                                        <span class="post-date-month is-small">Th7</span>
                                    </div>
                                </div>
                            </div> -->
                        </header>
                        <div class="entry-content single-page">
                            <!-- <h1>Chất lượng nước để nuôi ốc nhồi</h1> -->
                            <p>
                                {!! $baivietchitiet->content !!}
                            </p>
                            
                        </div>
                    </div>
                </article>
                
            </div>
        </div>
    </div>
</main>
@endif
@endsection