@extends('thucphamquangtrang.views.layouts.trangchu')
@section('content')
@if($cauchuyensanpham)
<div class="swap-content w-clear" style="margin-top: 30px">
    <div class="container">
        <div class="main-tit">
            <h2>{{$cauchuyensanpham->title}}</h2>
        </div>
        <div class="entry-post bai-viet">
            <div class="clear"></div>
            <div class="entry-content">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                    <a class="addthis_counter addthis_pill_style"></a>
                </div>

                <div class="zalo-share-button" data-href="https://giatruyenfood.vn/gioi-thieu.html" data-oaid="1038122335723082334" data-layout="1" data-color="blue" data-customize=false></div>
                <div class="clear"></div>
                <script type="text/javascript">
                    var addthis_config = {
                        "data_track_addressbar": false
                    };
                </script>
                <script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52843d4e1ff0313a"></script>
                <!-- AddThis Button END -->
                <div class="detail-about">
                  
                    <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:16px;"><span style="font-family:tahoma,geneva,sans-serif;"><span id="docs-internal-guid-a84b1193-7fff-640d-34b9-77226af2353f"><span style="color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">{!! $cauchuyensanpham->content !!}</span></p>
                    
                </div>
            </div>
            <div class="comment-facebook">
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=644082475745485";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <div class="fb-comments" data-href="https://giatruyenfood.vn/gioi-thieu.html" data-numposts="5" data-width="100%"></div>
            </div>
        </div>
    </div>
    @endif
@endsection