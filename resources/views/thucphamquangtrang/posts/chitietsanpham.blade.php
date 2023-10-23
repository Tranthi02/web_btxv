@extends('thucphamquangtrang.views.layouts.trangchu')
@section('content')
@if($chitiet)
<div class="swap-content w-clear" style="margin-top: 30px">
  <div class="center news_chil">
    <div class="breadcrumb">
      <a href="#"> Trang chủ</a>
      / <a href="../san-pham.html">Sản phẩm</a> /
      <a href="../thuc-pham-che-bien/index.html">Thực Phẩm Chế Biến</a>

      / <span>{{$chitiet->title}}</span>
    </div>
    <!-- {!!$chitiet->content!!} -->
    <div class="claer"></div>
    <div class="w-clear center">
      <div class="sp-l">
        <div class="ct-l">
          <div class="ct-img">
            <a id="Zoom-1" class="MagicZoom" href="/chi-tiet-san-pham/{{$chitiet->slug}}" title="{{$chitiet->title}}">
              <img src="/storage/{{$chitiet->thumbnail}}" alt="{{$chitiet->title}}" />
            </a>
          </div>
          <!-- Nhiều hình ảnh -->
          <div class="selectors">
            <div id="amazingcarousel-container-1">
              <div id="amazingcarousel-1" style="
                      display: none;
                      position: relative;
                      width: 100%;
                      margin: 0px auto 0px;
                    ">
                <div class="amazingcarousel-list-container">
                  <ul class="amazingcarousel-list">
                    <li class="amazingcarousel-item">
                      <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image">
                          <a data-zoom-id="Zoom-1" href="/chi-tiet-san-pham/{{$chitiet->slug}}">
                            <img src="/storage/{{$chitiet->thumbnail}}" alt="{{$chitiet->title}}" src="/storage/{{$chitiet->thumbnail}}" />
                          </a>
                        </div>
                      </div>
                    </li>
                    <li class="amazingcarousel-item">
                      <div class="amazingcarousel-item-container">
                        <div class="amazingcarousel-image">
                          <a data-zoom-id="Zoom-1" href="{{$chitiet->slug}}">
                            <img src="/storage/{{$chitiet->thumbnail}}" alt="{{$chitiet->title}}" />
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="amazingcarousel-prev"></div>
                  <div class="amazingcarousel-next"></div>
                </div>
              </div>
            </div>
          </div>
          <!--end selectors-->
        </div>
        <div class="ct-r">
          <div class="ct-tit">
            <h2>{{$chitiet->title}}</h2>
          </div>
          <ul class="gia_product">
            <li class="giakm">
              Giá sản phẩm: <span>{{$chitiet->price}} VNĐ</span>
            </li>
          </ul>
          <ul class="product_detail_main"></ul>
          
          <div class="detail_view_pro">
            <div class="luocxem">
              Lượt xem:
              <span>3175</span>
            </div>
          </div>
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <div class="addthis_inline_share_toolbox" style="margin-top: 20px"></div>
          <div class="zalo-share-button" style="margin-top: 20px" data-href="https://giatruyenfood.vn/san-pham/cha-da-ot-xiem-xanh-45.html" data-oaid="1038122335723082334" data-layout="1" data-color="blue" data-customize="false"></div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="center product_detail" style="margin-bottom: 20px">
      <div class="title_main_home" style="margin-top: 30px">
        <div>
          <span>Mô tả sản phẩm</span>
        </div>
      </div>
      <div class="noidung_product_detail">
        <p>{!!$chitiet->content!!}</p>

        

        <div class="eJOY__extension_root_class" id="eJOY__extension_root" style="all: unset">
          &nbsp;
        </div>
      </div>
    </div>
    <div class="sanpham_lienquan">
      <div class="title_main_in">
        <span>Sản phẩm liên quan </span>
      </div>
      <div class="w-clear">
        @foreach($sanphamlienquan as $splq)
        <div>
          <div class="col-md-4">

            <div class="item item-home">

              <div class="images">
                <a href="/chi-tiet-san-pham/{{$splq->slug}}" title="{{$splq->title}}">
                  <img src="/storage/{{$splq->thumbnail}} " style="width: 316px; height: 368px" alt="NEM NƯỚNG" class="img-responsive" />
                </a>
              </div>
              <div class="product-name text-uppercase">
                <a href="/chi-tiet-san-pham/{{$splq->slug}}" title="{{$splq->title}}">{{$splq->title}}</a>
                <div class="giakm">
                  {{$splq->price}} <span>VNĐ</span>
                </div>
              </div>
              <div class="product-detail text-center">
                <a href="/chi-tiet-san-pham/{{$splq->slug}}" title="{{$splq->title}}">
                  <img src="../images/icon-book.png" alt="Chi Tiết" /> Chi Tiết
                </a>
              </div>

            </div>
          </div>

        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<!-- <p>{!!$chitiet->content!!}</p> -->
@endif
@endsection