@extends('baotangxoviet.views.layouts.trangchu')
@section('content')
<div class=" container1 mx-auto reset" id="question">
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
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Hỏi đáp - Ý kiến</a>
                </div>
            </li>
            <!-- <li class="flex">
                        <div class="flex items-center">
                            <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44"
                                preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                            </svg>
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"
                                aria-current="page"></a>
                        </div>
                    </li> -->
        </ol>
    </nav>
    <!-- component -->


    <div class=" flex items-top justify-center bg-white dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-9xl mx-auto ">
            <div class="mt-8 overflow-hidden">
                @if(session('status'))
                <div style="color: #2563eb; margin: auto;font-weight: 600; padding-top: 7px;">
                    {{session('status')}}
                </div>
                @endif
                <!-- <h3 class="text-lg">Chúng tôi sẽ giải đáp câu hỏi của bạn sớm nhất. </h3> -->
                <div class="grid grid-cols-12 ">

                    <div class="sm:col-span-6 col-span-12">
                        <form class=" p-3 flex flex-col justify-center mt-6" method="POST">
                            @csrf
                            <div class="flex flex-col">
                                <label for="name" class="hidden">Họ Tên</label>
                                <input type="name" name="name" id="name" placeholder="Họ Tên" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800  focus:border-indigo-500 focus:outline-none">
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="email" class="hidden">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800  focus:border-indigo-500 focus:outline-none">
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="tel" class="hidden">Địa Chỉ</label>
                                <input type="tel" name="tel" id="tel" placeholder="Địa chỉ" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800  focus:border-indigo-500 focus:outline-none">
                            </div>
                            <div class="flex flex-col">
                                <label for="noidung" class="hidden"></label>
                                <input type="textarea" name="noidung" id="noidung" placeholder="Nội dung câu hỏi" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800  focus:border-indigo-500 focus:outline-none">
                            </div>

                            <button type="submit" class="md:w-32 bg-indigo-600 hover:bg-blue-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                                Gửi câu hỏi
                            </button>
                        </form>
                        <div class="faq mt-10">
                            <h2 class="text-center text-red-700  pl-3.5  leading-10 uppercase rounded-sm px-1 relative font-medium  text-xl no-underline">Câu hỏi thường gặp</h2>

                            <ul class="" v-for="(cauhoi, index) in cauhoi">
                                <li class="px-4 py-3 text-gray-600"><span class="text-gray-800 mx-2">@{{ index + 1 }}.</span>@{{cauhoi.Noidungcauhoi}} ?</li>

                            </ul>
                        </div>
                    </div>
                    <div class="sm:col-span-6 col-span-12 p-3   dark:bg-gray-800 sm:rounded-lg">
                        <div class="card pt-3 ">
                            <!-- <h5 class="card-title fix-title text-center font-weight-bold text-danger">
                                        Bản đồ </h5> -->
                            <div class="mt-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.8260164523394!2d105.66676880985801!3d18.671801764465872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce66654d5451%3A0xbf080c1b58101bca!2zQuG6o28gdMOgbmcgWMO0IFZp4bq_dCBOZ2jhu4cgVMSpbmg!5e0!3m2!1svi!2s!4v1690445648852!5m2!1svi!2s" width="600" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    var searchKey = new Vue({
        el: '#question',
        data: {
            cauhoi: [],
        },
        watch: {

        },
        mounted() {
            axios.get('/cau-hoi-thuong-gap')
                .then(response => {
                    this.cauhoi = response.data
                    console.log(this.cauhoi)
                })
        },
        method: {

        }
    })
</script>
@endsection