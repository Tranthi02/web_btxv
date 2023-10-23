@extends('baotangxoviet.views.layouts.trangchu')
@section('content')
<style>
    /* Apply styles to the pagination container */
    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
    }

    /* Style for pagination items */
    .page-item {
        margin: 0 5px;
    }

    /* Style for active pagination item */
    .page-item.active .page-link {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    /* Style for disabled pagination item */
    .page-item.disabled .page-link {
        background-color: #f8f9fa;
        color: #6c757d;
        border-color: #dee2e6;
    }

    /* Style for pagination links */
    .page-link {
        padding: 5px 10px;
        border: 1px solid #dee2e6;
        background-color: #fff;
        color: #bc0813;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.2s, color 0.2s;
    }

    /* Hover effect for pagination links */
    .page-link:hover {
        background-color: #007bff;
        color: #fff;
    }

    .search-up {
        height: 50px;
        margin-top: 2px;
    }
</style>

<!-- Main Chien Sy -->
<div class="container1 mx-auto">
    <!-- Điều hướng -->
    <nav class="flex mt-2" aria-label="Breadcrumb">
        <ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow">
            <li class="flex">
                <div class="flex items-center">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Home</span>
                    </a>
                </div>
            </li>
            <li class="flex">
                <div class="flex items-center">
                    <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="/ho-so-chien-sy" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Hồ sơ Chiến sỹ</a>
                </div>
            </li>

        </ol>
    </nav>

    <div class="grid grid-cols-12 mt-10 ">
        <div class="sm:col-span-4 col-span-12">
            <div class="search-bar">
                <div class="mb-3">
                    <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                        <input type="search" class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" placeholder="Nhập từ khóa " aria-label="Search" aria-describedby="button-addon1" />

                        <!--Search button-->
                        <button class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg" type="button" id="button-addon1" data-te-ripple-init data-te-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>

                        </button>
                    </div>
                </div>
            </div>
            <form action="" class="mt-10 shadow py-5">
                <div class="search-up mx-auto relative h-10 w-72 min-w-[200px] mb-5">
                    <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-red-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                        <option value="brazil">Phong trào đấu tranh 30-31</option>
                        <option value="bucharest">Bucharest</option>
                        <option value="london">London</option>
                        <option value="washington">Washington</option>
                    </select>
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-red-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-red-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-red-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 text-base">
                        Chọn Thời kỳ họat động
                    </label>
                </div>

                <div class="search-up mx-auto relative h-10 w-72 min-w-[200px] mb-5">
                    <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-red-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                        <option value="brazil">Brazil</option>
                        <option value="bucharest">Bucharest</option>
                        <option value="london">London</option>
                        <option value="washington">Washington</option>
                    </select>
                    <label class="text-base before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-red-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-red-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-red-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Tỉnh
                    </label>
                </div>
                <div class="search-up mx-auto relative h-10 w-72 min-w-[200px] mb-5">
                    <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-red-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                        <option value="brazil">Brazil</option>
                        <option value="bucharest">Bucharest</option>
                        <option value="london">London</option>
                        <option value="washington">Washington</option>
                    </select>
                    <label class=" text-base before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-red-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-red-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-red-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Huyện
                    </label>
                </div>
                <div class="search-up mx-auto relative h-10 w-72 min-w-[200px] mb-5">
                    <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-red-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                        <option value="brazil">Brazil</option>
                        <option value="bucharest">Bucharest</option>
                        <option value="london">London</option>
                        <option value="washington">Washington</option>
                    </select>
                    <label class=" text-base before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-red-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-red-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-red-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Chức vụ
                    </label>
                </div>
                <button type="submit" class="ml-2 px-4 py-2 bg-red-600 text-white rounded-sm" value="Tìm">Tìm</button>
            </form>
            <div class="box-video">
                @if($video)
                <h3 class="bg-red-600 fix-title text-white text-center rounded-t-sm">Video </h3>
                <iframe width="400" height="200" src="{{$video->youtube_id}}" title="{{$video->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                @endif    
            </div>
            <div class="col-span-12 mt-5 ">
                <h3 class=" pb-2.5">
                    <a href="" class="icon leading-10 uppercase text-black relative font-medium pl-3.5 text-xl no-underline">Liên
                        kết website</a>
                </h3>

                <div class="grid grid-cols-12 contents">
                    @foreach($lienketwebsite as $lkw)
                    <div class="sm:col-span-4 col-span-12 sm:mx-0 mb-5 title-global shadow">
                        <div>
                            <a href="{{$lkw->link}}" target="_blank" class="flex">
                                @if($lkw->anh == null)
                                <img src="../images/lkw.jpg" class="w-10 h-10 mx-3 my-3" alt="">
                                @else
                                <img src="../storage/{{$lkw->anh}}" class="w-10 h-10 mx-3 my-3" alt="">
                                @endif
                                <span class="my-4">{{$lkw->name}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        
        <div class="sm:col-span-8 col-span-12">
            <div class="px-3 list-card">
                <div class="card-heroes">
                    <div class="group-title flex text-red-600 sm:mt-0 mt-2">
                        <i class="fa-solid fa-address-card text-2xl  mr-2" style="color: #dc2626;"></i>
                        <h3 class="text-2xl">Danh Sách Chiến Sỹ Cách Mạng</h3>
                    </div>
                    @foreach($hsochiensy as $hscs)
                    <div class="border-b  p-2 font-sans" style="font-family: 'Open Sans', sans-serif">
                        <h3 style="font-size: 30px; line-height: 28px; margin-top: 20px ">{{$hscs->name}}</h3>
                        <!-- <h3 class="font-semibold  text-4xl  leading-5 mt-7">{{$hscs->name}}</h3> -->
                        <br>
                        <p>Năm sinh: {{$hscs->namsinh}}</p>
                        <p>Giới tính: {{$hscs->gioitinh}}</p>
                        <p>Bí danh: {{$hscs->bidanh}}</p>
                        <p>Quê quán: {{$hscs->quequan}}</p>
                        <p>Họ tên cha: {{$hscs->hotencha}}</p>
                        <p>Họ tên mẹ: {{$hscs->hotenme}}</p>
                        <p class="mt-5 font-bold">Thông tin hoạt động</p>
                        <br>

                        <p class="pb-4">{{$hscs->thongtinhoatdong}}</p>
                    </div>
                    @endforeach
                    

                </div>
                <div class="mt-10"> {{$hsochiensy->links()}}</div>
            </div>
            <div class="related-post mt-20 shadown ">
                <h3 class="pl-1 pb-2.5">
                    <a href="/bai-viet/danh-nhan-cach-mang" class="icon leading-10 uppercase text-black relative font-medium pl-3.5 text-xl no-underline">Danh
                        Nhân Cách Mạng Liên Quan</a>
                </h3>
                <ul class="post-img">

                    @foreach($danhnhancmlq as $dncmlq)
                    <li>

                        <div class="box-post">
                            <img class="" src="/storage/{{$dncmlq->thumbnail}}" alt="" style="margin:0">
                            <p class="fix-title pl-3font-semibold"><a href="/chi-tiet-bai-viet/{{$dncmlq->slug}}">{{$dncmlq->title}}</a></p>

                        </div>
                        <span class="date fix-title italic text-gray-500" style="font-size: 12px;">Ngày: {{$dncmlq->created_at}}</span>

                    </li>
                    @endforeach


                </ul>
            </div>

        </div>
    </div>
</div>
<!-- End Chien Sy -->
@endsection