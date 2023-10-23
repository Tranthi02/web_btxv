@extends('thucphamquangtrang.views.layouts.trangchu')
@section('content')
<div class="slideshow">
    <div class="box-slide">
        <div class="slider-wrapper theme-default">
            <div class="slider-main" class="nivoSlider">
            </div>
        </div>
    </div>
</div>
<div class="swap-content w-clear" style="margin-top: 30px">

    <div id="box-product-home" class="spnoibat">
        <div class="container">
            <div class="title">
                <h2>Sản Phẩm Nổi Bật</h2>
            </div>
            
            <div class="w-clear center news_chil" style="padding-top: 40px;">
            @foreach($sanphamnoibat as $spnb)
            <div class="col-md-4">
                <div class="item item-home">
                    <div class="images">
                        <a href="/chi-tiet-san-pham/{{$spnb->slug}}" title="{{$spnb->title}} ">
                            <img src="/storage/{{$spnb->thumbnail}}" alt="{{$spnb->title}} " class="img-responsive" style="width: 350px; height: 308px"/>
                        </a>
                    </div>
                    <div class="product-name text-uppercase">
                        <a href="/chi-tiet-san-pham/{{$spnb->slug}}" title="{{$spnb->title}} ">{{$spnb->title}} </a>
                        <div class="giakm">
                        {{$spnb->price}} <span>VNĐ</span>
                        </div>
                    </div>
                    <div class="product-detail text-center">
                        <a href="/chi-tiet-san-pham/{{$spnb->slug}}" title="{{$spnb->slug}} ">
                            <img src="../images/icon-book.png" alt="Chi Tiết"> Chi Tiết
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            <div class="products Load__ajax__tabs"></div>
        </div>
    </div>
    <div id="box-news">
        <div class="container">
            <div class="title">
                <h2>Tin Tức Hoạt Động</h2>
            </div>
            <div class="news-content">
                @foreach($tintuchoatdong as $tthd)
                <div class="item">
                    <div class="item-news">
                        <a href="chi-tiet-tin-tuc/{{$tthd->slug}}" title="{{$tthd->title}}">
                            <div class="image">
                                <img src="/storage/{{$tthd->thumbnail}}"  style="width: 273px; height: 218px" alt="{{$tthd->title}}" class="img-responsive" />
                                <div class="date">{{$tthd->created_at}}</div>
                            </div>
                            <div class="title">{{$tthd->title}}</div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <div id="box-video">
        <div class="container">
            <div class="title">
                <h2>Video</h2>
            </div>
            <div class="video-content row">
                @foreach($videomsx as $vdmsx)
                <div class="item-video col-sm-6 col-md-4">
                    <a href="/chi-tiet-video/{{$vdmsx->slug}}">
                        <div class="image">
                            <img src="/storage/{{$vdmsx->thumbnail}}" alt="{{$vdmsx->name}}">
                        </div>
                        <div class="video-name">{{$vdmsx->name}}</div>
                        <span class="hover-video"></span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection