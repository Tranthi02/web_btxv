@extends('layout.trangchu')
@section('content')
<div class="mb-3 text-justify   pl-2">
    <div class="grid grid-cols-12">
        <div class="sm:col-span-8 col-span-12 m-4 bg-white p-4">
            @if($chitiet)

            <p class="font-bold sm:text-3xl text-blue-900 text-lg text-justify  ">{{ $chitiet->title }}</p>

            <div class="text-gray-500 font-bold font-inclined text-lg mb-4 text-justify mt-2 ">{!! $chitiet->excerpt
                !!}</div>

            <img src="/storage/{{ $chitiet->thumbnail }}" alt="" class="max-w-lg m-auto mb-2">
            {!! $chitiet->content !!}
            @endif
        </div>
        <div class="sm:col-span-4 col-span-12   p-2">
            <p class="font-bold text-blue-800 my-4 ">BÀI VIẾT LIÊN QUAN</p>
            @foreach($lienquan as $lq)
            <p class="bg-gray-200 rounded mb-1 hover:bg-blue-500 hover:text-white sm:text-xs text-sm px-5 py-2 "><a
                    href="/chi-tiet/{{ $lq->slug}}"> {{ $lq->title}}</a></p>
            @endforeach
        </div>
    </div>
</div>

@endsection