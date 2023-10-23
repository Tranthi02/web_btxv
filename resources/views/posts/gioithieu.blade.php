@extends('layout.trangchu')
@section('content')
<main id="main" class="">


  <div id="content" role="main" class="content-area">


    <section class="section" id="section_761885478">
      <div class="bg section-bg fill bg-fill  bg-loaded">





      </div><!-- .section-bg -->

      <div class="section-content relative">

        <div class="row" id="row-298567639">
          <div class="col medium-6 small-12 large-6">
            <div class="col-inner">
              <div class="gap-element" style="display:block; height:auto; padding-top:49px" class="clearfix"></div>
              <h1><strong>VỀ CHÚNG TÔI</strong></h1>
              <p>TÊN SẢN PHẨM: Mật Ong Nghĩa Đồng <br> TÊN CHỦ THỂ: Tổ hợp tác sản xuất Mật ong xã Nghĩa Đồng <br>
                ĐỊA CHỈ: Xóm 5, xã Nghĩa Đồng, huyện Tân Kỳ, tỉnh Nghệ An <br>
                Điện thoại: 0389111187 <br>Email : matongnghiadong@gmail.com <br> Website: http://matongnghiadong.com</p>
            </div>
          </div>
          <div class="col medium-6 small-12 large-6">
            <div class="col-inner">
              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1764808262">
                <div class="img-inner dark">
                  <img width="754" height="464" src="../wp-content/themes/flatsome/assets/img/lazy.png" data-src="http://matong.langsonweb.com/wp-content/uploads/2019/01/honey1.jpg" class="lazy-load attachment-original size-original" alt="" srcset="" data-srcset="http://matong.langsonweb.com/wp-content/uploads/2019/01/honey1.jpg 754w, http://matong.langsonweb.com/wp-content/uploads/2019/01/honey1-300x185.jpg 300w" sizes="(max-width: 754px) 100vw, 754px" />
                </div>

                <style scope="scope">
                  #image_1764808262 {
                    width: 100%;
                  }
                </style>
              </div>

            </div>
          </div>
        </div>
      </div><!-- .section-content -->


      <style scope="scope">
        #section_761885478 {
          padding-top: 30px;
          padding-bottom: 30px;
          background-color: rgb(255, 255, 255);
        }
      </style>
    </section>


    <div class="row row-small" id="row-1997228765">

      @foreach($banner as $bn)
      <div class="col medium-3 small-6 large-3">
        <div class="col-inner">
          <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_287610901">
            <a class="image-lightbox lightbox-gallery" href="/storage/{{$bn->thumbnail}}" title="">
              <div class="img-inner image-cover dark" style="padding-top:147%;">
                <img width="1001" height="1443" src="/storage/{{$bn->thumbnail}}" data-src="/storage/{{$bn->thumbnail}}" class="lazy-load attachment-original size-original" alt="" srcset="" sizes="(max-width: 1001px) 100vw, 1001px" />
              </div>
            </a>
            <style scope="scope">
              #image_287610901 {
                width: 100%;
              }
            </style>
          </div>

        </div>
      </div>

      @endforeach
      

      <style scope="scope">

      </style>
    </div>


    <section class="section" id="section_1165089028">
      <div class="bg section-bg fill bg-fill  bg-loaded">





      </div><!-- .section-bg -->

      <div class="section-content relative">

        <div class="row" id="row-526119869">
          <div class="col small-12 large-12">
            <div class="col-inner">
              <div class="container section-title-container">
                <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:130%;color:rgb(72, 1, 1);">VÌ SAO CHỌN MẬT ONG CỦA CHÚNG TÔI</span><b></b></h3>
              </div><!-- .section-title -->
              <div class="gap-element" style="display:block; height:auto; padding-top:11px" class="clearfix"></div>
              <!-- <p style="text-align: center;">Mật ong Trường Thọ luôn mang hương vị của thiên nhiên từ  hoa của cây
                    rừng tràm, hoa nhãn, hoa cà phê,…. giàu chất dinh dưỡng sẽ mang lại cho quý khách hàng nhiều lợi ích
                    về sức khỏe lẫn sắc đẹp. Vì vậy, kính mong quý khách hàng hãy lựa chọn Trường Thọ để trải nghiệm
                    dòng mật ong thiên nhiên của chúng tôi</p> -->
            </div>
          </div>
        </div>
        <div class="row" id="row-1864774821">
          <div class="col medium-4 small-12 large-4">
            <div class="col-inner">

              <div class="icon-box featured-box icon-box-center text-center">
                <div class="icon-box-img" style="width: 205px">
                  <div class="icon">
                    <div class="icon-inner">
                      <img width="300" height="89" src="../wp-content/themes/flatsome/assets/img/lazy.png" data-src="http://matong.langsonweb.com/wp-content/uploads/2019/01/q1-2-370x110-300x89.png" class="lazy-load attachment-medium size-medium" alt="" srcset="" data-srcset="http://matong.langsonweb.com/wp-content/uploads/2019/01/q1-2-370x110-300x89.png 300w, http://matong.langsonweb.com/wp-content/uploads/2019/01/q1-2-370x110.png 370w" sizes="(max-width: 300px) 100vw, 300px" />
                    </div>
                  </div>
                </div>
                <div class="icon-box-text last-reset">

                  <h4 style="text-align: center;">HƯƠNG VỊ NGON NHẤT</h4>
                  <p style="text-align: center;"><span style="font-size: 95%;">Ong rừng cho ra mật có độ ngọt vừa
                      phải, hương thơm từ hoa rừng. Có mùi vị đặc trưng của hoa tràm, cà phê, nhãn, chôm
                      chôm,..</span></p>
                </div>
              </div><!-- .icon-box -->


            </div>
          </div>
          <div class="col medium-4 small-12 large-4">
            <div class="col-inner">

              <div class="icon-box featured-box icon-box-center text-center">
                <div class="icon-box-img" style="width: 205px">
                  <div class="icon">
                    <div class="icon-inner">
                      <img width="300" height="89" src="../wp-content/themes/flatsome/assets/img/lazy.png" data-src="http://matong.langsonweb.com/wp-content/uploads/2019/01/q2-2-370x110-300x89.png" class="lazy-load attachment-medium size-medium" alt="" srcset="" data-srcset="http://matong.langsonweb.com/wp-content/uploads/2019/01/q2-2-370x110-300x89.png 300w, http://matong.langsonweb.com/wp-content/uploads/2019/01/q2-2-370x110.png 370w" sizes="(max-width: 300px) 100vw, 300px" />
                    </div>
                  </div>
                </div>
                <div class="icon-box-text last-reset">

                  <h4 style="text-align: center;">TINH LỌC KĨ LƯỠNG</h4>
                  <p style="text-align: center;"><span style="font-size: 90%;"> Khép kín và kiểm tra nghiêm ngặt
                      trong sản xuất cùng với vùng nguyên liệu rộng khắp các từ rừng U Minh đến rừng Tây
                      Nguyên</span></p>
                </div>
              </div><!-- .icon-box -->


            </div>
          </div>
          <div class="col medium-4 small-12 large-4">
            <div class="col-inner">

              <div class="icon-box featured-box icon-box-center text-center">
                <div class="icon-box-img" style="width: 205px">
                  <div class="icon">
                    <div class="icon-inner">
                      <img width="300" height="89" src="../wp-content/themes/flatsome/assets/img/lazy.png" data-src="http://matong.langsonweb.com/wp-content/uploads/2019/01/q3-2-370x110-300x89.png" class="lazy-load attachment-medium size-medium" alt="" srcset="" data-srcset="http://matong.langsonweb.com/wp-content/uploads/2019/01/q3-2-370x110-300x89.png 300w, http://matong.langsonweb.com/wp-content/uploads/2019/01/q3-2-370x110.png 370w" sizes="(max-width: 300px) 100vw, 300px" />
                    </div>
                  </div>
                </div>
                <div class="icon-box-text last-reset">

                  <h4 style="text-align: center;"><span style="font-size: 90%;">GIÁ CẢ HỢP LÝ</span></h4>
                  <p style="text-align: center;"><span style="font-size: 90%;">Sản phẩm chất lượng nhưng chúng tôi
                      luôn hướng đến khách hàng với mức giá ưu đãi và hợp lý nhất</span></p>
                </div>
              </div><!-- .icon-box -->


            </div>
          </div>
        </div>
      </div><!-- .section-content -->


      <style scope="scope">
        #section_1165089028 {
          padding-top: 30px;
          padding-bottom: 30px;
          background-color: rgb(253, 194, 21);
        }
      </style>
    </section>

    <section class="section" id="section_1410817705">
      <div class="bg section-bg fill bg-fill  bg-loaded">





      </div><!-- .section-bg -->

      <div class="section-content relative">

        <div class="row" id="row-1183420909">
          <div class="col small-12 large-12">
            <div class="col-inner">


              <div class="row large-columns-4 medium-columns- small-columns-2 row-small">
                @foreach($gioithieubottom as $gt)
                <div class="gallery-col col">
                  <div class="col-inner">
                    <a class="image-lightbox lightbox-gallery" href="/storage/{{$gt->thumbnail}}" title="">
                      <div class="box has-hover gallery-box box-none">
                        <div class="box-image image-overlay-add image-cover" style="padding-top:100%;">
                          <img width="369" height="206" src="/storage/{{$gt->thumbnail}}" class="lazy-load attachment-original size-original" alt="" ids="235,234,233,202,200,197,196,191,87,89,98,175" style="none" col_spacing="small" image_height="100%" image_size="original" image_overlay="rgba(0, 0, 0, 0.29)" image_hover="overlay-add" srcset="" sizes="(max-width: 369px) 100vw, 369px" />
                          <div class="overlay fill" style="background-color: rgba(0, 0, 0, 0.29)">
                          </div>
                        </div><!-- .image -->
                        <div class="box-text text-left">
                          <p></p>
                        </div><!-- .text -->
                      </div><!-- .box -->
                    </a>
                  </div><!-- .col-inner -->
                </div><!-- .col -->
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div><!-- .section-content -->


      <style scope="scope">
        #section_1410817705 {
          padding-top: 30px;
          padding-bottom: 30px;
        }
      </style>
    </section>



  </div>



</main>
@endsection