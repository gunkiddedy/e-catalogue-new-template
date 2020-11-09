<template>
<div>
    <!-- loader spin-->
    <div v-if="loading" class="z-30 flex justify-around relative opacity-25 bg-black inset-0">
        <svg class="animate-spin absolute w-12 h-12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.315px" height="122.88px" viewBox="0 0 122.315 122.88" enable-background="new 0 0 122.315 122.88" xml:space="preserve">
            <g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M94.754,14.534c8.844,0,16.014,7.17,16.014,16.012 c0,8.844-7.17,16.015-16.014,16.015c-8.843,0-16.013-7.17-16.013-16.015C78.741,21.704,85.911,14.534,94.754,14.534L94.754,14.534z M109.265,52.121c-7.205,0-13.049,5.844-13.049,13.048c0,7.207,5.844,13.049,13.049,13.051c7.207,0,13.051-5.844,13.051-13.051 C122.315,57.965,116.472,52.121,109.265,52.121L109.265,52.121z M94.135,89.903c-5.032,0-9.114,4.082-9.114,9.113 c0,5.032,4.082,9.114,9.114,9.114c5.031,0,9.113-4.082,9.113-9.114C103.248,93.985,99.166,89.903,94.135,89.903L94.135,89.903z M59.275,104.65c-5.032,0-9.114,4.081-9.114,9.113c0,5.034,4.082,9.116,9.114,9.116s9.113-4.082,9.113-9.116 C68.389,108.731,64.308,104.65,59.275,104.65L59.275,104.65z M23.652,90.86c-4.717,0-8.54,3.823-8.54,8.54 c0,4.715,3.823,8.54,8.54,8.54c4.714,0,8.538-3.825,8.538-8.54C32.19,94.684,28.366,90.86,23.652,90.86L23.652,90.86z M9.096,54.872C4.072,54.872,0,58.944,0,63.968c0,5.021,4.072,9.093,9.096,9.093c5.021,0,9.093-4.072,9.093-9.093 C18.189,58.944,14.116,54.872,9.096,54.872L9.096,54.872z M23.652,17.026c-6.354,0-11.508,5.155-11.508,11.509 s5.154,11.506,11.508,11.506s11.506-5.152,11.506-11.506S30.006,17.026,23.652,17.026L23.652,17.026z M59.341,0 c-7.651,0-13.858,6.205-13.858,13.855c0,7.651,6.207,13.856,13.858,13.856s13.856-6.205,13.856-13.856 C73.197,6.205,66.992,0,59.341,0L59.341,0z" />
            </g>
        </svg>
    </div>

    <!-- Breadcrumbs-->
    <div class="flex px-4 mt-4 items-center justify-start text-blue-400 text-xs font-bold">
        <div>Semua Kategori</div>
        <div class="flex items-center">
            <span class="text-gray-500">
                <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </span>
            {{ category.name }}
        </div>
        <div class="flex items-center" v-if="subcategory.name !== null">
            <span class="text-gray-500">
                <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </span>
            {{ subcategory.name }}
        </div>

    </div>

    <!-- MAIN CONTENT-->
    <transition name="fade">
        <div class="flex px-4 py-4 mt-4" v-if="!loading">

            <!-- PRODUCT DETAIL-->
            <div class="w-full mr-6 flex">

                <!-- LEFT SIDE-->
                <div class="product-image w-full mr-6">

                    <!-- IMG ZOOM-->
                    <div class="img-zoom bg-white bg-cover rounded shadow px-4 py-4 h-106">
                        <img :src="'/storage/'+images[indexImage].image_path" :alt="images[indexImage].name" class="rounded object-cover w-full h-full">
                    </div>

                    <!--<span>{{indexImage}}</span>-->

                    <!-- THUMBNAIL-->
                    <div class="thumbnail flex items-center justify-between mt-4">
                        <div>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <div class="flex justify-start items-center">
                            <div class="shadow rounded-lg bg-white w-20 h-auto px-2 py-2 mr-2" v-for="(image, index) in images" :key="image.id">
                                <img @click="switchImage(index)" :src="'/storage/'+image.image_path" :alt="image.name" class="rounded object-cover w-full h-16 cursor-pointer">
                            </div>
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
                        <p class="mr-2 text-lg leading-tight">{{product.name}}</p>
                        <div class="rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                            <p class="text-gray-300 text-xs">SNI</p>
                        </div>
                    </div>

                    <div class="border-t border-gray-300 my-4"></div>

                    <div class="flex flex-col text-sm text-gray-600 leading-tight">
                        <span class="mb-2">No. SNI: {{product.nomor_sni}}</span>
                        <span class="mb-2">No. Sertifikat TKDN: {{product.nomor_sertifikat_tkdn}}</span>
                        <span class="mb-2">No. Laporan: {{product.nomor_laporan_tkdn}}</span>
                    </div>

                    <div class="flex items-center justify-between text-sm text-gray-600 leading-tight">
                        <div class="w-2/6">Nilai TKDN: </div>
                        <div class="w-full bg-white h-2 rounded-full mr-2 relative">
                            <div class="absolute bg-green-500 h-2 rounded-full" :style="'width:'+product.nilai_tkdn+'%'"></div>
                        </div>
                        <div class="text-green-500 font-bold">{{product.nilai_tkdn}}</div>
                    </div>

                    <div class="border-t border-gray-300 my-4"></div>

                    <div class="flex items-center justify-start">
                        <span class="text-sm text-gray-600 mr-2">Harga:</span>
                        <span class="font-bold text-lg text-red-600 mr-2">Rp.{{product.price}}</span>
                        <span>/pc</span>
                    </div>

                    <div>
                        <span class="text-xs text-gray-500">For custom order please contact the company</span>
                    </div>

                    <div class="w-full mt-40">
                        <div class="border-t border-gray-300 my-3"></div>
                        <div class="flex items-center">
                            <span class="text-gray-600 mr-2 text-sm">HS Code:</span>
                            <span class="text-gray-700">{{product.hs_code}}</span>
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
                            <span class="font-bold text-sm text-gray-700">{{company.name}}</span>
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
                                <div v-if="company.address !== null">{{company.address}}</div>
                                <div v-else>Jl. Rasamala Raya Blok L10 No 14 Perumahan Telaga Pesona Telaga Murni - Cikarang Barat</div>
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
    </transition>

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

        <!-- Deskripsi Produk -->
        <div class="mt-8" v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}">
            <div class="flex-1 text-gray-700">
                <div class="h-full px-6 py-6 relative leading-tight ">
                    <p class="normal-case mb-2 font-semibold leading-tight text-lg">
                        Deskripsi Produk</p>
                    <p class="text-gray-600 leading-tight mb-8" v-if="product.description !== null">
                        {{ product.description }}
                    </p>
                    <p class="text-gray-600 leading-tight mb-8" v-else>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fuga repellendus repudiandae voluptas hic ut officia molestias repellat architecto nulla!
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
                    <p class="text-gray-600 leading-tight mb-8" v-if="company.additional_info !== null">
                        {{ company.additional_info }}
                    </p>
                    <p class="text-gray-600 leading-tight mb-8" v-else>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur explicabo eos accusamus dicta unde? Officiis voluptas sit a repellat facere?
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
            loading: true,
            openTab: 1,
            product: {},
            images: [],
            category: {},
            subcategory: {},
            company: {},

            indexImage: 0,
        }
    },

    created() {
        this.loadProductDetail();
        // this.getProductIdFromUrl();
    },

    methods: {

        switchImage: function (param) {
            this.indexImage = param;
        },

        getProductIdFromUrl: function () {
            let currentUrl = window.location.pathname;
            let arr = new Array();
            arr = currentUrl.split("/");
            let id = arr[2];
            return id;
            // console.log(arr);
        },

        loadProductDetail: function () {
            let product_id = this.getProductIdFromUrl();
            let url = '/api/product-detail/' + product_id;
            axios.get(url)
                .then((response) => {
                    this.loading = false;
                    this.product = response.data.product;
                    this.images = response.data.images;
                    this.category = response.data.category;
                    this.subcategory = response.data.subcategory;
                    this.company = response.data.company;
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        toggleTabs: function (tabNumber) {
            this.openTab = tabNumber;
        }
    }
}
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity .5s;
}

/* .fade-leave-active below version 2.1.8 */
.fade-enter,
.fade-leave-to {
    opacity: 0;
}
</style>
