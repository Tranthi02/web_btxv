@extends('thucphamquangtrang.views.layouts.trangchu')
@section('content')
<div class="swap-content w-clear" style="margin-top: 30px">
    <div class="content" style="padding-bottom: 0;">
        <div class="title_main_in"><span>SẢN PHẨM</span></div>
        <div class="w-clear center news_chil">
            @foreach($sanpham as $sp)
            <div class="col-md-4">
                <div class="item item-home">
                    <div class="images">

                        

                        <a href="/chi-tiet-san-pham/{{$sp->slug}}" title="{{$sp->title}} ">

                            <img src="/storage/{{$sp->thumbnail}}" alt="{{$sp->title}} " class="img-responsive" style="height: 308px; width: 358px" />
                 
                        </a>
                    </div>
                    <div class="product-name text-uppercase">
                        <a href="/chi-tiet-san-pham/{{$sp->slug}}" title="{{$sp->title}}">{{$sp->title}} </a>
                        <div class="giakm">
                        {{$sp->price}} <span>VNĐ</span>
                        </div>
                    </div>
                    <div class="product-detail text-center">
                        <a href="/chi-tiet-san-pham/{{$sp->slug}}" title="{{$sp->slug}} ">
                            <img src="../images/icon-book.png" alt="Chi Tiết"> Chi Tiết
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div><!--end w-clear-->


        <div style="width:200px; margin:auto"> {{$sanpham->links()}}</div>
       

    </div>
</div>

@endsection