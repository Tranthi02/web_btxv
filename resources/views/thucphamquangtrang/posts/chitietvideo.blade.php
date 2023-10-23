@extends('thucphamquangtrang.views.layouts.trangchu')
@section('content')
@if($chitietvideo)
<div class="swap-content w-clear" style="margin-top: 30px">
    <div id="main_content_web">
        <div class="block_content w-clear center news_chil">
            <ul class="breadcrumb">
                <li><a href="/" class="transitionAll">Trang chủ</a> </li>
                <li><a href="" class="transitionAll">Video</a> </li>
            </ul>
            <div class="title_main_in"><span>{{$chitietvideo->title}}</span></div>
            <div class="clear"></div>
            <div class="show-pro">
                <div id="box_video">
                    <iframe width="100%" height="470" src="{{$chitietvideo->youtube_id}}" frameborder="0" allowfullscreen></iframe>
                </div>
                <!-- <div class="title-detail">Mô tả sản phẩm</div> -->
                <div class="clear"></div>
                <div style="margin:20px 0">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                        <a class="addthis_counter addthis_pill_style"></a>
                    </div>
                    <script type="text/javascript">
                        var addthis_config = {
                            "data_track_addressbar": false
                        };
                    </script>
                    <script type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52843d4e1ff0313a"></script>
                </div>
                <div class="chitiettin"></div>
            </div>
            <div class="title_main_in"><span>Video cùng loại</span></div>
            <div class="video-content">
                <div class="row">
                    @foreach($videolienquan as $vdlq)
                    <div class="item-video col-sm-4">
                        <a href="/chi-tiet-video/{{$vdlq->slug}}">
                            <div class="image">
                                <img src="/storage/{{$vdlq->thumbnail}}" alt="{{$vdlq->title}} ">
                            </div>
                            <div class="video-name">{{$vdlq->title}} </div>
                            <span class="hover-video"></span>
                        </a>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection