@extends('thucphamquangtrang.views.layouts.trangchu')
@section('content')
@if($chitietbaiviet)
<div class="swap-content w-clear" style="margin-top: 30px">
        <div class="title_main_in"><span>{{$chitietbaiviet->title}}</span></div>
<div class="center news_chil">

    <p style="text-align: justify;">{!! $chitietbaiviet->content !!}</p>


    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
	<div class="addthis_inline_share_toolbox" style="margin-top: 20px;"></div>
        <div class="zalo-share-button" style="margin-top: 20px;" data-href="https://giatruyenfood.vn/tin-tuc/an-gio-cha-co-map-khong-nhi--87.html" data-oaid="1038122335723082334" data-layout="1" data-color="blue" data-customize=false></div>
                <div class="clear"></div>
                <!-- <h2 class="tincungloai">Tin tức khác</h2> -->
                        <!-- <ul class="tincungloai" style="margin-bottom: 20px;">
                            <li><a href="gia-truyen-food-tung-bung-khai-truong-co-so-moi-1096.html">Gia Truyền Food - Tưng bừng khai trương cơ sở mới</a> (16/07/2022)</li>
                            <li><a href="nhan-gia-cong-thuc-pham-nem-gio-cha-thuc-pham-dong-lanh-so-luong-lon-624.html">nhận gia công thực phẩm nem, giò chả,... thực phẩm đông lạnh số lượng lớn</a> (14/04/2021)</li>
                            <li><a href="nhung-mon-an-sang-quen-thuoc-co-su-xuat-hien-co-gio-lua-210.html">Những món ăn sáng quen thuộc có sự xuất hiện có giò lụa</a> (26/06/2020)</li>
                            <li><a href="nem-cha-hue-vao-sieu-thi-81.html">NEM CHẢ HUẾ VÀO SIÊU THỊ</a> (03/07/2019)</li>
                            <li><a href="che-bien-mon-ngon-tu-gio-lua-con-thua-sau-tet-295.html">Chế biến món ngon từ giò lụa còn thừa sau Tết</a> (26/08/2020)</li>
            		
            </ul> -->
        </div>    
    </div>
@endif
@endsection
