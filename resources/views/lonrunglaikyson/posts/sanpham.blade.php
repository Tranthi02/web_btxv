@extends('lonrunglaikyson.views.layouts.trangchu')
@section('content')
<div class="breadcrumb">
    <div class="container">

        <div class="c-bread">
            <ul class="list-unstyled">
                <li style="padding-left:0"><a href="../index.html">
                        <h1>Trang chủ</h1>
                    </a></li>

                <li class="current">
                    <h1>Tất cả sản phẩm</h1>
                </li>

            </ul>
        </div>

    </div>
</div>






<div class="main-container col2-left-layout">
    <div class="container">
        <div class="category-description std">
            <div class="slider-items-products wow bounceInRight animated">

                <img src="../images/g9988b8.jpg" alt="" style="max-width:100%" />


            </div>
        </div>

        <!-- <div class="col-left sidebar col-sm-3 hidden-xs">
            <div class="row">
                <aside class="col-left sidebar  wow bounceInLeft animated">

                    <div class="side-nav-categories">
                        <div class="block-title">Sản phẩm</div>
                        <div class="box-content box-category">
                            <ul id="magicat">


                                <li class="level0- level0">
                                    <span class="magicat-cat"><a href="../lon-viet-nam.html"><span>Lợn Nguyên Con</span></a></span>
                                </li>



                                <li class="level0- level0">
                                    <span class="magicat-cat"><a href="../lonhuuco.html"><span>SP Hướng Hữu Cơ</span></a></span>
                                </li>


                            </ul>
                        </div>
                    </div>


                    <div class="filter-container">
                        <div class="filter-container__selected-filter" style="display: none;">
                            <div class="filter-container__selected-filter-header clearfix">
                                <span class="filter-container__selected-filter-header-title">Bạn chọn</span>
                                <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="filter-container__selected-filter-list">
                                <ul></ul>
                            </div>
                        </div>

                        <div class="filter-group">
                            <div class="filter-group-title filter-group-title--green">
                                Mức giá
                            </div>








                            <ul>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <a href="javascript:void(0)">
                                        <label for="filter-0">
                                            <input type="checkbox" id="filter-0" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="0đ - 1000000đ" value="(>0 AND <1000000)" data-operator="OR">
                                            <i class="fa"></i>
                                            0đ - 1000000đ
                                        </label>
                                    </a>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <a href="javascript:void(0)">
                                        <label for="filter-1000000">
                                            <input type="checkbox" id="filter-1000000" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="1000000đ - 2000000đ" value="(>1000000 AND <2000000)" data-operator="OR">
                                            <i class="fa"></i>
                                            1000000đ - 2000000đ
                                        </label>
                                    </a>
                                </li>

                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <a href="javascript:void(0)">
                                        <label for="filter-2000000">
                                            <input type="checkbox" id="filter-2000000" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="2000000đ - 4000000đ" value="(>2000000 AND <4000000)" data-operator="OR">
                                            <i class="fa"></i>
                                            2000000đ - 4000000đ
                                        </label>
                                    </a>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <a href="javascript:void(0)">
                                        <label for="filter-4000000">
                                            <input type="checkbox" id="filter-4000000" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="4000000đ - 6000000đ" value="(>4000000 AND <6000000)" data-operator="OR">
                                            <i class="fa"></i>
                                            4000000đ - 6000000đ
                                        </label>
                                    </a>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <a href="javascript:void(0)">
                                        <label for="filter-tren-settings-search-data8">
                                            <input type="checkbox" id="filter-tren-settings-search-data8" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="Trên 6000000" value="(>6000000)" data-operator="OR">
                                            <i class="fa"></i>
                                            Trên 6000000
                                        </label>
                                    </a>
                                </li>
                            </ul>
                        </div>



                        <div class="filter-group">
                            <div class="filter-group-title filter-group-title--green">
                                Chọn hãng
                            </div>
                            <ul style="max-height: 200px;overflow-y: scroll;overflow-x: hidden;">

                                <li class="filter-item filter-item--check-box filter-item--green filter-item--half">
                                    <a href="javascript:void(0)">
                                        <label for="filter-ha-giang">
                                            <input type="checkbox" id="filter-ha-giang" onchange="toggleFilter(this)" data-group="Vendor" data-field="vendor" data-text="Hà Giang" value="(Hà Giang)" data-operator="OR">
                                            <i class="fa"></i>
                                            Hà Giang
                                        </label>
                                    </a>
                                </li>

                                <li class="filter-item filter-item--check-box filter-item--green filter-item--half">
                                    <a href="javascript:void(0)">
                                        <label for="filter-ha-giang-cao-bang">
                                            <input type="checkbox" id="filter-ha-giang-cao-bang" onchange="toggleFilter(this)" data-group="Vendor" data-field="vendor" data-text="Hà Giang | Cao Bằng" value="(Hà Giang | Cao Bằng)" data-operator="OR">
                                            <i class="fa"></i>
                                            Hà Giang | Cao Bằng
                                        </label>
                                    </a>
                                </li>

                                <li class="filter-item filter-item--check-box filter-item--green filter-item--half">
                                    <a href="javascript:void(0)">
                                        <label for="filter-hoa-binh">
                                            <input type="checkbox" id="filter-hoa-binh" onchange="toggleFilter(this)" data-group="Vendor" data-field="vendor" data-text="Hòa Bình" value="(Hòa Bình)" data-operator="OR">
                                            <i class="fa"></i>
                                            Hòa Bình
                                        </label>
                                    </a>
                                </li>

                            </ul>
                        </div>



                        <div class="filter-group">
                            <div class="filter-group-title filter-group-title--green">
                                Chuyên Mục
                            </div>
                            <ul style="max-height: 200px;overflow-y: scroll;overflow-x: hidden;">

                                <li class="filter-item filter-item--check-box filter-item--green filter-item--half">
                                    <a href="javascript:void(0)">
                                        <label for="filter-lon-huu-co">
                                            <input type="checkbox" id="filter-lon-huu-co" onchange="toggleFilter(this)" data-group="Hãng" data-field="product_type" data-text="Lợn Hữu Cơ" value="(Lợn Hữu Cơ)" data-operator="OR">
                                            <i class="fa"></i>
                                            Lợn Hữu Cơ
                                        </label>
                                    </a>
                                </li>

                                <li class="filter-item filter-item--check-box filter-item--green filter-item--half">
                                    <a href="javascript:void(0)">
                                        <label for="filter-lon-man-nguyen-con">
                                            <input type="checkbox" id="filter-lon-man-nguyen-con" onchange="toggleFilter(this)" data-group="Hãng" data-field="product_type" data-text="Lợn Mán Nguyên Con" value="(Lợn Mán Nguyên Con)" data-operator="OR">
                                            <i class="fa"></i>
                                            Lợn Mán Nguyên Con
                                        </label>
                                    </a>
                                </li>

                                <li class="filter-item filter-item--check-box filter-item--green filter-item--half">
                                    <a href="javascript:void(0)">
                                        <label for="filter-lon-moc-ham">
                                            <input type="checkbox" id="filter-lon-moc-ham" onchange="toggleFilter(this)" data-group="Hãng" data-field="product_type" data-text="Lợn Móc Hàm" value="(Lợn Móc Hàm)" data-operator="OR">
                                            <i class="fa"></i>
                                            Lợn Móc Hàm
                                        </label>
                                    </a>
                                </li>

                                <li class="filter-item filter-item--check-box filter-item--green filter-item--half">
                                    <a href="javascript:void(0)">
                                        <label for="filter-lon-muong-nguyen-con">
                                            <input type="checkbox" id="filter-lon-muong-nguyen-con" onchange="toggleFilter(this)" data-group="Hãng" data-field="product_type" data-text="Lợn Mường Nguyên Con" value="(Lợn Mường Nguyên Con)" data-operator="OR">
                                            <i class="fa"></i>
                                            Lợn Mường Nguyên Con
                                        </label>
                                    </a>
                                </li>

                                <li class="filter-item filter-item--check-box filter-item--green filter-item--half">
                                    <a href="javascript:void(0)">
                                        <label for="filter-lon-rung-nguyen-con">
                                            <input type="checkbox" id="filter-lon-rung-nguyen-con" onchange="toggleFilter(this)" data-group="Hãng" data-field="product_type" data-text="Lợn Rừng nguyên con" value="(Lợn Rừng nguyên con)" data-operator="OR">
                                            <i class="fa"></i>
                                            Lợn Rừng nguyên con
                                        </label>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>

                </aside>
            </div>
        </div> -->
        <script>
            var filter = new Bizweb.SearchFilter()


            var selectedSortby;

            function toggleFilter(e) {
                _toggleFilter(e);
                renderFilterdItems();
                doSearch(1);
            }

            function _toggleFilter(e) {
                var $element = $(e);
                var group = $element.attr("data-group");
                var field = $element.attr("data-field");
                var text = $element.attr("data-text");
                var value = $element.attr("value");
                var operator = $element.attr("data-operator");
                var filterItemId = $element.attr("id");

                if (!$element.is(':checked')) {
                    filter.deleteValue(group, field, value, operator);
                } else {
                    filter.addValue(group, field, value, operator);
                }

                $(".catalog_filters li[data-handle='" + filterItemId + "']").toggleClass("active");
            }

            function renderFilterdItems() {
                var $container = $(".filter-container__selected-filter-list ul");
                $container.html("");

                $(".filter-container input[type=checkbox]").each(function(index) {
                    if ($(this).is(':checked')) {
                        var id = $(this).attr("id");
                        var name = $(this).closest("label").text();

                        addFilteredItem(name, id);
                    }
                });

                if ($(".filter-container input[type=checkbox]:checked").length > 0)
                    $(".filter-container__selected-filter").show();
                else
                    $(".filter-container__selected-filter").hide();
            }

            function addFilteredItem(name, id) {
                var filteredItemTemplate = "<li class='filter-container__selected-filter-item' for='{3}'><a href='javascript:void(0)' onclick=\"{0}\"><i class='fa fa-close'></i> {1}</a></li>";
                filteredItemTemplate = filteredItemTemplate.replace("{0}", "removeFilteredItem('" + id + "')");
                filteredItemTemplate = filteredItemTemplate.replace("{1}", name);
                filteredItemTemplate = filteredItemTemplate.replace("{3}", id);

                var $container = $(".filter-container__selected-filter-list ul");
                $container.append(filteredItemTemplate);
            }

            function removeFilteredItem(id) {
                $(".filter-container #" + id).trigger("click");
            }

            function clearAllFiltered() {
                filter = new Bizweb.SearchFilter();


                $(".filter-container__selected-filter-list ul").html("");
                $(".filter-container input[type=checkbox]").attr('checked', false);
                $(".filter-container__selected-filter").hide();

                doSearch(1);
            }

            function doSearch(page, options) {
                if (!options) options = {};

                NProgress.start();

                filter.search({
                    view: "data", // Để đuôi của template search ở đây(vd: 'search.data.bwt' thì để 'data')
                    page: page,
                    sortby: selectedSortby,
                    success: function(html) {
                        var $html = $(html);

                        // Muốn thay thẻ DIV nào khi filter thì viết như này
                        var $categoryProducts = $html.find(".category-products");
                        $(".category-products").html($categoryProducts.html());
                        pushCurrentFilterState({
                            sortby: selectedSortby
                        });
                    }
                });
            }

            function sortby(e) {
                var sortby = $(e).find("option:selected").val();
                _selectSortby(sortby);
                doSearch(1);
            }

            function _selectSortby(sort) {
                switch (sort) {
                    case "price-asc":
                        selectedSortby = "price_min:asc";
                        break;
                    case "price-desc":
                        selectedSortby = "price_min:desc";
                        break;
                    case "alpha-asc":
                        selectedSortby = "name:asc";
                        break;
                    case "alpha-desc":
                        selectedSortby = "name:desc";
                        break;
                    case "created-desc":
                        selectedSortby = "created_on:desc";
                        break;
                    case "created-asc":
                        selectedSortby = "created_on:asc";
                        break;
                    default:
                        selectedSortby = sort;
                        break;
                }
            }

            function toggleCheckbox(id) {
                $(id).click();
            }

            function pushCurrentFilterState(options) {
                if (!options) options = {};

                var url = filter.buildSearchUrl(options);
                var queryString = url.slice(url.indexOf('?'))
                pushState(queryString);
            }

            function pushState(url) {
                window.history.pushState({
                    turbolinks: true,
                    url: url
                }, null, url)
            }

            function selectFilterByCurrentQuery() {
                var isFilter = false;
                var url = window.location.href;
                var queryString = decodeURI(window.location.search);
                var filters = queryString.match(/\(.*?\)/g);

                if (filters && filters.length > 0) {
                    filters.forEach(function(item) {
                        item = item.replace(/\(\(/g, "(");
                        var element = $(".filter-container input[value='" + item + "']");
                        element.attr("checked", "checked");
                        _toggleFilter(element);
                    });

                    isFilter = true;
                }

                var sortOrder = getParameter(url, "sortby");
                if (sortOrder) {
                    _selectSortby(sortOrder);
                }

                if (isFilter) {
                    doSearch(1);
                }
            }

            function getParameter(url, name) {
                name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                    results = regex.exec(url);
                return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            $(document).ajaxComplete(function() {
                NProgress.done();
            });

            $(document).ready(function() {
                selectFilterByCurrentQuery();
            });
        </script>

        <div class="col-main col-sm-12 collection">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1p">Tất cả sản phẩm</h1>
                </div>
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <article class="col-main">

                    <div class="category-products pull-left wow bounceInUp animated coll-all">




                        @foreach($sanpham1 as $sp)
                        <div class="col-md-4 collection-page col-sm-6 col-xs-6 width-mb-100 coll-item">


                            <div class="col-item">

                                <div class="item-inner">
                                    <div class="product-wrapper">
                                        <div class="thumb-wrapper">
                                            <a href="/chi-tiet-san-pham/{{$sp->slug}}"><img src="/storage/{{$sp->thumbnail}}" class="img-fix" alt="{{$sp->title}}"></a>
                                        </div>

                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title">
                                                <h3> <a href="/chi-tiet-san-pham/{{$sp->slug}}" title="{{$sp->title}}">{{$sp->title}}</a> </h3>
                                            </div>
                                            <div class="item-content">

                                                <div class="item-price">

                                                    <div class="price-box">


                                                        <a href="/chi-tiet-san-pham/{{$sp->slug}}"><span class="price"><i><b>{{$sp->price}}</b></i> </span></a>



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

                </article>
            </div>
        </div>

    </div>
</div>

<div class="section-service">
    <table class="tb">
        <th>
            <div class="table-service">
                <img src="../images/t188b8.png">
                <b>Chất Lượng</b>
                <p class="">Quốc Tế</p>
            </div>
        </th>
        <th>
            <div class="table-service">
                <img src="../images/t288b8.png">
                <b>Dịch Vụ</b>
                <p class="">Chuyên Nghiệp</p>
            </div>
        </th>
        <th>
            <div class="table-service">
                <img src="../images/t388b8.png">
                <b>Miễn Phí</b>
                <p class="">Vận Chuyển</p>
            </div>
        </th>
        <th>
            <div class="table-service">
                <img src="../images/t488b8.png">
                <b>Showroom</b>
                <p class="">Toàn Quốc</p>
            </div>
        </th>
    </table>
</div>
@endsection