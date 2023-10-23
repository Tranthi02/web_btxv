@extends('baotangxoviet.views.layouts.trangchu')
@section('content')
<div class=" container1 mx-auto reset ">
    <!-- Điều hướng -->
    <nav class="flex mt-2" aria-label="Breadcrumb">
        <ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow">
            <li class="flex">
                <div class="flex items-center">
                    <a href="/" class="text-gray-400 hover:text-gray-500">
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
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Thư viện ảnh
                    </a>
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

    <!-- <div class="grid grid-cols-12 mt-10">

            </div> -->
    <div class="container mx-auto px-5 py-2 lg:px-32  ">
        <div class="-m-1 flex flex-wrap md:-m-2">
            <div class="flex w-1/3 flex-wrap p-3 my-4">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center transition duration-300 ease-in-out hover:scale-110" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" onclick="showModal('https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp')" />
                    <p class="mt-2">Huraaaa</p>
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap p-3 my-4">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center transition duration-300 ease-in-out hover:scale-110" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" onclick="showModal('https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp')" />
                    <p class="mt-2">Huraaaa</p>
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap p-3 my-4">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center transition duration-300 ease-in-out hover:scale-110" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" onclick="showModal('https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp')" />
                    <p class="mt-2">Huraaaa</p>
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap p-3 my-4">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center transition duration-300 ease-in-out hover:scale-110" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" onclick="showModal('https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp')" />
                    <p class="mt-2">Huraaaa</p>
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap p-3 my-4">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center transition duration-300 ease-in-out hover:scale-110" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" onclick="showModal('https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp')" />
                    <p class="mt-2">Huraaaa</p>
                </div>
            </div>
            <div class="flex w-1/3 flex-wrap p-3 my-4">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center transition duration-300 ease-in-out hover:scale-110" src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" onclick="showModal('https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp')" />
                    <p class="mt-2">Huraaaa</p>
                </div>
            </div>

        </div>
    </div>



    <!-- The Modal -->
    <div id="modal" class="hidden fixed top-0 left-0 z-80 w-screen h-screen bg-black/70 flex justify-center items-center">

        <!-- The close button -->
        <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold" href="javascript:void(0)" onclick="closeModal()">&times;</a>

        <!-- A big image will be displayed here -->
        <img id="modal-img" class="max-w-[800px] max-h-[600px] object-cover" />
    </div>

    <script>
        // Get the modal by id
        var modal = document.getElementById("modal");

        // Get the modal image tag
        var modalImg = document.getElementById("modal-img");

        // this function is called when a small image is clicked
        function showModal(src) {
            modal.classList.remove('hidden');
            modalImg.src = src;
        }

        // this function is called when the close button is clicked
        function closeModal() {
            modal.classList.add('hidden');
        }
    </script>

</div>
@endsection