@extends('ocbuouden.views.layouts.trangchu')
@section('content')

<div class="shop-page-title category-page-title page-title">
    <div class="page-title-inner flex-row medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <div class="is-large">
                <nav class="woocommerce-breadcrumb breadcrumbs uppercase">
                    <a href="/">Trang chủ</a>
                    <span class="divider">&#47;</span> Cửa hàng
                </nav>
            </div>
            <div class="category-filtering category-filter-row">
                <!-- <a href="#" data-open="#shop-sidebar" data-pos="left" class="filter-button uppercase plain">
                    <i class="icon-equalizer"></i> <strong>Lọc</strong>
                </a>
                <div class="inline-block"></div> -->
            </div>
        </div>
        <div class="flex-col medium-text-center">
            <!-- <p class="woocommerce-result-count hide-for-medium">
                Showing all 9 results
            </p>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                    <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                    <option value="rating">Thứ tự theo điểm đánh giá</option>
                    <option value="date">Mới nhất</option>
                    <option value="price" selected="selected">
                        Thứ tự theo giá: thấp đến cao
                    </option>
                    <option value="price-desc">
                        Thứ tự theo giá: cao xuống thấp
                    </option>
                </select>
                <input type="hidden" name="paged" value="1" />
            </form> -->
        </div>
    </div>
</div>
<main id="main" class="">
    <div class="row category-page-row">
        <div class="col large-12">
            <div class="shop-container">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2">
                    @foreach($allsanpham as $asp)
                    <div class="product-small col has-hover product type-product post-1151 status-publish first instock product_cat-oc-1-tuan-tuoi product_cat-oc-giong has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="col-inner">
                            <div class="badge-container absolute left top z-1">
                                <div class="callout badge badge-square">
                                    <!-- <div class="badge-inner secondary on-sale">
                                        <span class="onsale">-13%</span>
                                    </div> -->
                                </div>
                            </div>
                            <div class="product-small box">
                                <div class="box-image">
                                    <div class="image-none">
                                        <a href="/chi-tiet-san-pham/{{$asp->slug}}">
                                            <noscript><img style="width:300px; height:300px;" src="/storage/{{$asp->thumbnail}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="
                                            /storage/{{$asp->thumbnail}}
                                " sizes="(max-width: 300px) 100vw, 300px" /></noscript><img style="width:300px; height:300px;" src="/storage/{{$asp->thumbnail}}" data-src="/storage/{{$asp->thumbnail}}" class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" data-sizes="(max-width: 300px) 100vw, 300px" />
                                        </a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover"></div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                </div>
                                <div class="box-text box-text-products text-center grid-style-2">
                                    <div class="title-wrapper">
                                        <p class="name product-title woocommerce-loop-product__title">
                                            <a href="/chi-tiet-san-pham/{{$asp->slug}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{$asp->title}}</a>
                                        </p>
                                    </div>
                                    <div class="price-wrapper">
                                        <span class="price">
                                            <ins><span class="woocommerce-Price-amount amount"><bdi>{{$asp->price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                    </div>
                                    <div class="add-to-cart-button">
                                        <!-- <a href="indexb95e.html?add-to-cart=1151" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-flat" data-product_id="1151" data-product_sku="" aria-label="Thêm &ldquo;Ốc Bươu Đen Giống 2 Tuần Tuổi&rdquo; vào giỏ hàng" rel="nofollow">Mua hàng</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
