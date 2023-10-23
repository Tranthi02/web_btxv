@extends('layout.trangchu')
@section('content')
<div class="col-span-12 text-blue-900 text-sm mb-4 px-4 py-4">
    <a href="/">TRANG CHỦ</a> > <a href="/bai-viet-don/{{$category->slug}}">{{$category->name}}</a>
</div>


@if($baiviet)
<div class=" bg-white mx-4 px-4">
    <div class="px-4 text-3xl text-center">{{ $baiviet->title }}</div>
    <p class=" text-justify mt-2 mx-2">{!! $baiviet->content !!}</p>
</div>
@endif





@endsection