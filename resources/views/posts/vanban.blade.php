@extends('layout.layoutchinh')
@section('content')
<div id="searchvanban">
    <div class="w-full mb-6">

        <div class="border-red-700 px-3 py-2 font-bold text-2xl bg-red-700 text-white w-1/4 mb-4">Tìm kiếm văn bản</div>

        <div class=" border-red-700 border-4">
            <div class="grid grid-cols-12 w-full p-2">
                <div class="col-span-12 sm:col-span-4">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-lg col-span-4 text-gray-600">
                            Số ký hiệu:
                        </p>
                        <input type="text" name="" id="" v-model="sokyhieu" class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md">
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-4 sm:mx-3">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Từ ngày:
                        </p>
                        <input type="datetime-local" name="" id="" v-model="ngaybanhanh" class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md">
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-4">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Đến ngày:
                        </p>
                        <input type="datetime-local" name="" id="" v-model="ngayhethan" class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md">
                    </div>
                </div>
                <!--  -->
            </div>
            <div class="grid grid-cols-12 w-full p-2">

                <!--  -->

                <div class="col-span-12 sm:col-span-4 ">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-lg col-span-4 text-gray-600">
                            Cơ quan <br> ban hành:
                        </p>
                        <input type="text" name="" id="" v-model="coquanbanhanh" class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md">
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-4 sm:mx-3">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-lg col-span-4 text-gray-600">
                            Loại văn bản:
                        </p>
                        <select v-model="loaivb" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded   col-span-8  " id="grid-state">
                            <option> -- Mời chọn --</option>
                            @foreach($loaivb as $lvb)
                            <option value="{{$lvb->id}}"> {{$lvb->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!--  -->
                <div class="col-span-12 sm:col-span-4 sm:mx-3">
                    <button class="button is-primary w-3/5 mt-4 ml-5" v-on:click='search()'>Tìm kiếm </button>
                </div>
                <!--  -->
            </div>
        </div>
        <!--  -->

        <div class="w-full mt-3 sm:mb-0 mb-3">

            <table class="table is-bordered w-full" v-for="ds in dsvanban">
                <tr class="bg-gray-300 py-1.5 ">
                    <td colspan="2" class="text-lg text-justify">
                        <a :href="ds.link" class="flex items-center font-bold text-justify text-lg">
                            <i class="far fa-file-pdf text-4xl text-red-700 mr-3"></i>@{{ds.sokyhieu}}
                        </a>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" class="col-table-vanban pl-6 pr-6">
                        <p class="text-lg text-justify">
                            @{{ds.trichyeu}}
                        </p>
                    </td>
                    <td rowspan="1">
                        <p class="text-green-400">
                            Ban hành:
                            @{{ds.ngaybh}}

                        </p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="1">
                        <p class="text-green-400">
                            Hết hạn
                            @{{ds.ngayhh}}

                        </p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="1">

                    </td>
                    <td rowspan="1">
                        <p class="text-green-400">
                            Trạng thái: @{{ds.trangthai}}
                        </p>
                    </td>
                </tr>
            </table>
            <div>
                {{$vanban ->links()}}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@if($tenvb->slug =="van-ban-tw")
<script>
    var vm = new Vue({
        el: '#searchvanban',
        data: {
            dsvanban: [],
            sokyhieu: '',
            tennganh: '',
            ngaybanhanh: '',
            ngayhethan: '',
            coquanbanhanh: '',
            loaivb: '',
            idvb: '27',
        },
        // chạy ngay khi web load
        mounted: function() {
            const self = this;

            axios.get('/van-ban-tw')
                .then(function(response) {
                    self.dsvanban = response.data;
                });
        },
        // chạy khi thực hiện event
        methods: {
            search: function() {
                const self = this;

                axios.get('/ajax-van-ban?sokyhieu=' + self.sokyhieu +
                        "&coquanbanhanh=" + self.coquanbanhanh +
                        "&ngaybanhanh=" + self.ngaybanhanh +
                        "&ngayhethan=" + self.ngayhethan +
                        "&loaivb=" + self.loaivb +
                        "&idvb=" + self.idvb)

                    .then(function(response) {
                        self.dsvanban = response.data;
                    })
                console.log(self.ngaybanhanh);
            }
        }
    })
</script>
@endif
@if($tenvb->slug =="van-ban-tinh")
<script>
    var vm = new Vue({
        el: '#searchvanban',
        data: {
            dsvanban: [],
            tennganh: '',
            ngaybanhanh: '',
            ngayhethan: '',
            coquanbanhanh: '',
            loaivb: '',
            sokyhieu: '',
            idvb: '28',
        },
        // chạy ngay khi web load
        mounted: function() {
            const self = this;

            axios.get('/van-ban-tinh')
                .then(function(response) {
                    self.dsvanban = response.data;
                });
        },
        // chạy khi thực hiện event
        methods: {
            search: function() {
                const self = this;

                axios.get('/ajax-van-ban?sokyhieu=' + self.sokyhieu +
                        "&coquanbanhanh=" + self.coquanbanhanh +
                        "&ngaybanhanh=" + self.ngaybanhanh +
                        "&ngayhethan=" + self.ngayhethan +
                        "&loaivb=" + self.loaivb +
                        "&idvb=" + self.idvb)
                    .then(function(response) {
                        self.dsvanban = response.data;
                    })
                console.log(self.dsvanban);
            }
        }
    })
</script>
@endif

@if($tenvb->slug =="van-ban-huyen")
<script>
    var vm = new Vue({
        el: '#searchvanban',
        data: {
            dsvanban: [],
            sokyhieu: '',
            tennganh: '',
            ngaybanhanh: '',
            ngayhethan: '',
            coquanbanhanh: '',
            loaivb: '',
            idvb: '29',
        },
        // chạy ngay khi web load
        mounted: function() {
            const self = this;

            axios.get('/van-ban-huyen')
                .then(function(response) {
                    self.dsvanban = response.data;
                });
        },
        // chạy khi thực hiện event
        methods: {
            search: function() {
                const self = this;

                axios.get('/ajax-van-ban?sokyhieu=' + self.sokyhieu +
                        "&coquanbanhanh=" + self.coquanbanhanh +
                        "&ngaybanhanh=" + self.ngaybanhanh +
                        "&ngayhethan=" + self.ngayhethan +
                        "&loaivb=" + self.loaivb +
                        "&idvb=" + self.idvb)
                    .then(function(response) {
                        self.dsvanban = response.data;
                    })
                console.log(self.dsvanban);
            }
        }
    })
</script>
@endif

@endsection