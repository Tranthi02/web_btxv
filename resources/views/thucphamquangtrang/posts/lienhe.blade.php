@extends('thucphamquangtrang.views.layouts.trangchu')
@section('content')
<div class="swap-content w-clear" style="margin-top: 30px">
    <script type="text/javascript" src="js/my_script_check_form.js"></script>
    <script type="text/javascript">
        function js_submit() {
            if (isEmpty(document.getElementById('ten'), "Vui lòng nhập họ tên")) {
                document.getElementById('ten').focus();
                return false;
            }


            if (!check_email(document.frm.email.value)) {
                alert("Email không đúng định dạng");
                document.frm.email.focus();
                return false;
            }


            if (isEmpty(document.getElementById('dienthoai'), "Vui lòng nhập số điện thoại")) {
                document.getElementById('dienthoai').focus();
                return false;
            }


            if (!isNumber(document.getElementById('dienthoai'), "Số điện thoại không hợp lệ")) {
                document.getElementById('dienthoai').focus();
                return false;
            }

            document.frm.submit();
        }
    </script>

    <script language='javascript'>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

    <script type="text/javascript">
        // JavaScript Document
        function re_capcha() {
            document.getElementById('vimg').src = "ajax/check_captcha/captcha_image.png";
        }
    </script>
    <link href="css/style_contact.css" type="text/css" rel="stylesheet">
    <div class="widget k-widget-map k-widget has-header has-icon-header">
        <div class="overlay">
            <div class="center">
                <div class="title_main_in"><span>Liên hệ</span></div>
                <!-- widget heading -->
                <div class="widget-content">
                    <div class="row" style="margin: 0;">
                        <div class="lienhe-left">
                            <div class="item-left">
                                
                                <div class="map-c">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6636036638147!2d106.69483571428744!3d10.83703496103662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175285e606d58e5%3A0xd616ff36ac95a477!2sGIA+TRUYEN+FOOD!5e0!3m2!1svi!2s!4v1557154603720!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div><!--end map-c-->
                            </div>
                        </div>
                        
                    </div>
                    <!-- widget content -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection