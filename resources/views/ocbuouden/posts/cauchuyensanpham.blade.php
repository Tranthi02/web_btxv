@extends('ocbuouden.views.layouts.trangchu')
@section('content')

@if($cauchuyensanpham)
<main id="main" class="">
    <div cl ass="page-wrapper page-left-sidebar" style="padding-top: 30px;
    padding-bottom: 30px;">
        <div class="row">
            <div id="content" class="large-12 right col" role="main">
                <div class="page-inner">
                    <h1 style="text-align: center">
                        {{$cauchuyensanpham->title}}
                    </h1>
                    <p>
                       {!! $cauchuyensanpham->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endif
@endsection