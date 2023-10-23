@extends('lonrunglaikyson.views.layouts.trangchu')
@section('content')
@if($cauchuyensanpham)
<div class="breadcrumb">
    <div class="container">

        <div class="c-bread">
            <ul class="list-unstyled">
                <li style="padding-left:0"><a href="/">
                        <h1>Trang chủ</h1>
                    </a></li>

                <li class="current">
                    <h1>Lợn Rừng Lai</h1>
                </li>

            </ul>
        </div>

    </div>
</div>



<div class="main-container col2-left-layout">
    <div class="container">
        <div class="">

            <header class="page-header">
                <h2>Giới thiệu</h2>
            </header>
           
            <div class="rte">
               
                <p style="margin:0cm; margin-bottom:.0001pt; text-align:justify"><span style="font-family:Times New Roman,Times,serif;"><span style="background:white"><i><span style="font-size:14.0pt"><span style="color:black">{!!$cauchuyensanpham->content!!}</span></span></i></span></span></p>
               
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>
@endif
@endsection