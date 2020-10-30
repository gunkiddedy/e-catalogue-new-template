<template>
<div>
    <!-- Breadcrumbs-->
    <div class="flex px-4 mt-4 items-center justify-start text-blue-400 text-xs font-bold">
        <div>Semua Kategori</div>
        <div class="flex items-center">
            <span class="text-gray-500">
                <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </span>
            Mesin Peralatan & Industri
        </div>
        <div class="flex items-center">
            <span class="text-gray-500">
                <svg class="w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </span>
            ALat Uji & Ukur
        </div>
        <div class="flex items-center">
            <span class="text-gray-500">
                <svg class="w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </span>
            Pressure Gauge
        </div>
    </div>

    <!-- MAIN CONTENT-->
    <div class="flex px-4 py-4 mt-4">

        <!-- PRODUCT DETAIL-->
        <div class="w-full mr-6 flex">

            <!-- LEFT SIDE-->
            <div class="product-image w-full mr-6">
                <!-- IMG ZOOM-->
                <div class="img-zoom bg-white bg-cover rounded shadow px-12 py-12">
                    <img src="/img/login-img.png" alt="">
                </div>

                <!-- THUMBNAIL-->
                <div class="thumbnail flex items-center justify-between mt-4">
                    <div>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>

                    <div class="shadow-sm rounded-lg bg-white w-20 h-auto px-2 py-2">
                        <img src="/img/login-img.png" alt="">
                    </div>
                    <div class="shadow-sm rounded-lg bg-white w-20 h-auto px-2 py-2">
                        <img src="/img/login-img.png" alt="">
                    </div>
                    <div class="shadow-sm rounded-lg bg-white w-20 h-auto px-2 py-2">
                        <img src="/img/login-img.png" alt="">
                    </div>
                    <div class="shadow-sm rounded-lg bg-white w-20 h-auto px-2 py-2">
                        <img src="/img/login-img.png" alt="">
                    </div>

                    <div>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE-->
            <div class="desc-product w-full bg-gray-100 font-semibold">

                <div class="flex items-center">
                    <p class="mr-2 text-lg leading-tight">Customized Pre-filter untuk Blower dan FFU</p>
                    <div class="rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                        <p class="text-gray-300 text-xs">SNI</p>
                    </div>
                </div>

                <div class="border-t border-gray-300 my-4"></div>

                <div class="flex flex-col text-sm text-gray-600 leading-tight">
                    <span class="mb-2">No. SNI: 1234546789.89</span>
                    <span class="mb-2">No. Sertifikat TKDN: 1234546789.89</span>
                    <span class="mb-2">No. Laporan: 1234546789.89</span>
                </div>
                <div class="flex items-center justify-between text-sm text-gray-600 leading-tight">
                    <div class="w-2/6">Nilai TKDN: </div>
                    <div class="w-full bg-white h-2 rounded-full mr-2 relative">
                        <div class="absolute bg-green-500 h-2 w-3/4 rounded-full"></div>
                    </div>
                    <div class="text-green-500 font-bold">75%</div>
                </div>

                <div class="border-t border-gray-300 my-4"></div>

                <div class="flex items-center justify-start">
                    <span class="text-sm text-gray-600 mr-2">Harga:</span>
                    <span class="font-bold text-lg text-red-600 mr-2">Rp.250.000</span>
                    <span>/pc</span>
                </div>

                <div>
                    <span class="text-xs text-gray-500">For custom order please contact the company</span>
                </div>

                <div class="w-full mt-40">
                    <div class="border-t border-gray-300 my-4"></div>
                    <div class="flex items-center">
                        <span class="text-gray-600 mr-2 text-sm">HS Code:</span>
                        <span class="text-gray-700">8501.10.3000</span>
                    </div>
                </div>

            </div>

        </div>

        <!-- RIGHT SIDEBAR-->
        <div class="bg-white h-full w-64 rounded-lg shadow">

            <div class="flex justify-center items-center flex-col my-6">
                <div class="bg-blue-500 rounded-full w-20 h-20"></div>

                <div class="flex justify-center items-center flex-col leading-tight">
                    <div class="px-4 py-4 text-center">
                        <span class="font-bold text-sm text-gray-700">PT.MAJU JAYA PRIMA PERKASA ABADI</span>
                    </div>
                    <div class="flex justify-between items-center bg-blue-500 rounded-full px-4 py-1 my-4 leading-tight text-gray-300 text-xs">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>
                            Trusted Suplier
                        </span>
                    </div>
                </div>

                <div class="border-b border-gray-400 w-full my-4"></div>

                <div class="flex flex-col leading-tight text-gray-600">
                    <div class="font-bold text-xs">
                        <div class="px-4 py-1 flex justify-between items-center">
                            <div>Jl. Rasamala Raya Blok L10 No 14 Perumahan Telaga Pesona Telaga Murni - Cikarang Barat</div>
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-400 w-full my-4"></div>

                <div class="flex flex-col leading-tight text-gray-600">
                    <div class="text-xs">
                        <div class="px-4 py-1 flex justify-between items-center">
                            <div class="mr-2 font-bold">Login Terakhir</div>
                            <div>11/08/2020</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- TAB DESC -->
    <div class="w-full mt-12">

        <div class="flex justify-between items-center border-b leading-loose">

            <!-- NAV TAB -->
            <div>
                <ul class="flex border-b border-gray-300 font-bold">
                    <li class="-mb-px mx-8 cursor-pointer">
                        <span class="inline-block py-2 px-4 text-blue-500 font-semibold  hover:text-blue-800" @click="toggleTabs(1)" v-bind:class="{'text-blue-600': openTab !== 1, 'border-b-2 border-blue-500': openTab === 1}">
                            Deskripsi
                        </span>
                    </li>
                    <li class="mr-1 cursor-pointer">
                        <span class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" @click="toggleTabs(2)" v-bind:class="{'text-blue-600': openTab !== 2, 'border-b-2 border-blue-500': openTab === 2}">
                            Tentang Perusahaan
                        </span>
                    </li>
                </ul>
            </div>
            <!-- END NAV TAB -->

        </div>

        <!-- Deskripsi CARD -->
        <div class="mt-8" v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}">
            <div class="flex-1 text-gray-700">
                <div class="h-full px-6 py-6 relative leading-tight ">
                    <p class="normal-case mb-2 font-semibold leading-tight text-lg">
                        Deskripsi Perusahaan</p>
                    <p class="text-gray-600 leading-tight mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla.
                    </p>
                </div>
            </div>
        </div>
        <!-- Tentang Perusahaan CARD -->
        <div class="mt-8" v-bind:class="{'hidden': openTab !== 2, 'block': openTab === 2}">
            <div class="flex-1 text-gray-700">
                <div class="h-full px-6 py-6 relative leading-tight ">
                    <p class="normal-case mb-2 font-semibold leading-tight text-lg">
                        Tentang Perusahaan</p>
                    <p class="text-gray-600 leading-tight mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla.
                    </p>
                    <p class="text-gray-600 leading-tight mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            openTab: 1
        }
    },

    methods: {
        toggleTabs: function (tabNumber) {
            this.openTab = tabNumber;
        }
    }
}
</script>
