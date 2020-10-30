<template>
<div>
    <div class="flex px-4 py-4 mt-4">

        <div class="bg-white h-full w-64 rounded-lg mr-6 shadow">

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
                            <div class="mr-2">NIB:</div>
                            <div>021987678544099</div>
                        </div>
                        <div class="px-4 py-1 flex justify-between items-center">
                            <div class="mr-2">Email:</div>
                            <div class="text-blue-600">katalogi@gmail.com</div>
                        </div>
                        <div class="px-4 py-1 flex justify-between items-center">
                            <div class="mr-2">No Telp:</div>
                            <div>021987678544099</div>
                        </div>
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
                            <div class="mr-2 font-bold">Join Date</div>
                            <div>11/08/2020</div>
                        </div>
                        <div class="px-4 py-1 flex justify-between items-center">
                            <div class="mr-2 font-bold">Login Terakhir</div>
                            <div>11/08/2020</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="w-full">

            <div class="flex justify-between items-center border-b leading-loose">

                <!-- NAV TAB -->
                <div>
                    <ul class="flex border-b border-gray-300 font-bold">
                        <li class="-mb-px mx-8">
                            <a class="inline-block py-2 px-4 text-blue-500 font-semibold  hover:text-blue-800" href="#" v-on:click="toggleTabs(1)" v-bind:class="{'text-blue-600': openTab !== 1, 'border-b-2 border-blue-500': openTab === 1}">About</a>
                        </li>
                        <li class="mr-1">
                            <a class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#" v-on:click="toggleTabs(2)" v-bind:class="{'text-blue-600': openTab !== 2, 'border-b-2 border-blue-500': openTab === 2}">
                                Product List
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END NAV TAB -->

                <div>
                    <!-- BUTTON ADD PRODUCT & EDIT COMPANY PROFILE-->
                    <button v-if="buttonAddProduct" @click="toggleModal()" type="button" class="bg-blue-500 text-gray-100 flex leading-tight text-sm py-2 px-4 border rounded border-gray-400">
                        <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Add New Product
                    </button>

                    <button v-if="buttonEditCompany" @click="toggleModal()" type="button" class="bg-blue-500 text-gray-100 flex leading-tight text-sm py-2 px-4 border rounded border-gray-400">
                        <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Edit Company Profile
                    </button>
                    <!-- BUTTON ADD PRODUCT & EDIT COMPANY PROFILE-->

                    <!-- MODAL FORM-->
                    <div v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex">
                        <div class="relative max-w-4xl w-9/12">
                            <!--content-->
                            <div class="bg-white border-0 rounded-lg shadow-lg relative px-6 py-4">
                                <!--header-->
                                <div class="flex justify-end absolute right-0 top-0 -mt-5 -mr-5">
                                    <!-- CLOSE BUTTON CIRCLE-->
                                    <div class="flex items-center justify-center">
                                        <button class="bg-red-500 relative w-12 h-12 rounded-full p-1 border-4 border-white text-white" @click="toggleModal()">
                                            <svg class="w-6 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg leading-tight font-semibold">
                                        Add New Product
                                    </h3>
                                </div>

                                <!--body-->
                                <div class="flex justify-between items-center h-full">
                                    <!-- LEFT SIDE-->
                                    <div class="left w-2/5 h-full py-2 flex flex-col">
                                        <div class="product-name mb-6">
                                            <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-4 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Product Name">
                                        </div>
                                        <div class="grid grid-rows-2">
                                            <div class="flex mb-6 items-center justify-between">
                                                <div class="w-1/12">
                                                    <input type="checkbox" name="" id="" class="rounded-lg">
                                                </div>
                                                <div class="font-semibold w-1/6 mr-4">
                                                    SNI
                                                </div>
                                                <div class="w-full">
                                                    <input type="text" placeholder="SNI Number" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                                </div>
                                            </div>
                                            <div class="flex mb-6 items-center justify-between">
                                                <div class="w-1/12">
                                                    <input type="checkbox" name="" id="" class="rounded-lg">
                                                </div>
                                                <div class="font-semibold w-1/6 mr-4">
                                                    TKDN
                                                </div>
                                                <div class="w-full">
                                                    <input type="text" placeholder="Nilai TKDN" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-2/4">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-rows-2">
                                            <div class="flex mb-6 items-center justify-between">
                                                <div class="w-1/12">
                                                    &nbsp;
                                                </div>
                                                <div class="font-semibold text-lg w-1/6 mr-4">
                                                    &nbsp;
                                                </div>
                                                <div class="w-full">
                                                    <input type="text" placeholder="Nomor Sertifikat TKDN" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                                </div>
                                            </div>
                                            <div class="flex mb-6 items-center justify-between">
                                                <div class="w-1/12">
                                                    &nbsp;
                                                </div>
                                                <div class="font-semibold text-lg w-1/6 mr-4">
                                                    &nbsp;
                                                </div>
                                                <div class="w-full">
                                                    <input type="text" placeholder="Nomor Laporan" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-rows-1">
                                            <div class="flex mb-6 items-center justify-between">
                                                <div class="w-1/4 font-semibold mr-4">
                                                    HS Code
                                                </div>
                                                <div class="w-full">
                                                    <input type="text" placeholder="ex. 0987789009876" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- RIGHT SIDE-->
                                    <div class="right w-2/4 h-full py-2 flex flex-col">
                                        <div class="description mb-3">
                                            <textarea name="" id="" placeholder="Tulis deskripsi produk" class="h-56 rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full"></textarea>
                                        </div>
                                        <div class="button-plus-upload flex px-4 justify-between items-center mb-3">
                                            <div class="flex items-center justify-center">
                                                <button class="relative focus:outline-none bg-white text-gray-300 rounded-lg shadow-sm w-16 h-16 border-2 border-dashed border-gray-300" type="button"><svg class="w-10 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                    </svg></button>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <button class="relative focus:outline-none bg-white text-gray-300 rounded-lg shadow-sm w-16 h-16 border-2 border-dashed border-gray-300" type="button"><svg class="w-10 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                    </svg></button>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <button class="relative focus:outline-none bg-white text-gray-300 rounded-lg shadow-sm w-16 h-16 border-2 border-dashed border-gray-300" type="button"><svg class="w-10 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                    </svg></button>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <button class="relative focus:outline-none bg-white text-gray-300 rounded-lg shadow-sm w-16 h-16 border-2 border-dashed border-gray-300" type="button"><svg class="w-10 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                    </svg></button>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <button class="relative focus:outline-none bg-white text-gray-300 rounded-lg shadow-sm w-16 h-16 border-2 border-dashed border-gray-300" type="button"><svg class="w-10 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                    </svg></button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <span class="text-gray-500 font-semibold">*Upload max 5 photos</span>
                                        </div>
                                        <div class="flex mb-6 items-center justify-between">
                                            <span class="font-semibold mr-4">Rp</span>
                                            <div class="w-full">
                                                <input type="text" placeholder="Masukkan harga" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--footer MODAL-->
                                <div class="flex items-center justify-end">
                                    <button class="text-blue-500 mr-3 bg-transparent border border-blue-500 hover:text-blue-600 font-bold text-sm px-6 py-1 rounded focus:outline-none" type="button" v-on:click="toggleModal()">Save Product</button>
                                    <button class="text-white border border-blue-500 bg-blue-500 hover:text-gray-100 font-bold text-sm px-6 py-1 rounded focus:outline-none" type="button" v-on:click="toggleModal()">Add Product</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL FORM-->

                    <!-- DIV AFTER MODAL SHOW UP -->
                    <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>

                </div>

            </div>

            <!-- PRODUCT CARD -->
            <div class="mt-8 grid grid-cols-5 gap-2" :class="{'hidden': openTab !== 2, 'block': openTab === 2}">
                <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">
                    <img src="/img/login-img.png" alt="" class="rounded-t-lg">
                    <div class="absolute px-4 py-4 bg-white rounded-lg leading-tight hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-74 hover:-mt-41">
                        <p class="normal-case mb-6 font-bold text-sm leading-tight">
                            Customized Pre-filter untuk Blower dan FFU
                        </p>
                        <p class="uppercase text-gray-600 leading-tight text-xs">
                            pt. maju jaya prima perkasa abadi
                        </p>
                        <div>
                            <p class="mt-2 mb-2 text-xs text-gray-500">
                                Jakarta Barat
                            </p>
                            <div class="mb-2 rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2">
                                <p class="text-gray-300 text-xs">SNI</p>
                            </div>
                            <p class="font-bold mb-2">
                                <span class="text-red-500 font-bold">Rp250.000</span>
                                <span class="text-sm">/ pc</span>
                            </p>
                            <p class="text-xs mb-4 text-gray-500">
                                Visit in order to contact the seller
                            </p>
                            <a href="/product-detail">
                                <button type="button" class="hover:bg-blue-700 bg-blue-600 px-6 py-2 w-full rounded-lg ">
                                    <p class="text-white leading-none font-bold">See Product</p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRODUCT CARD -->

            <!-- ABOUT CARD -->
            <div class="mt-8" v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}">
                <div class="flex-1 text-gray-700 border shadow-lg border-gray-400 rounded-lg">
                    <div class="h-full px-6 py-6 bg-white rounded-lg relative leading-tight hover:bg-gray-100 ">
                        <p class="normal-case mb-2 font-semibold leading-tight text-lg">
                            Company Profile</p>
                        <p class="text-gray-600 leading-tight mb-8">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla.
                        </p>
                        <p class="text-gray-600 leading-tight mb-8">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla.
                        </p>
                        <p class="text-gray-600 leading-tight mb-8">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla.
                        </p>

                    </div>
                </div>
            </div>
            <!-- END ABOUT CARD -->

            <div class="flex justify-around items-center mt-16">
                <ul class="flex justify-between items-center leading-tight font-bold text-gray-700">
                    <div class="rounded-full bg-gray-500 text-orange-100">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <li class="px-4 underline text-orange-400">1</li>
                    <li class="px-4">2</li>
                    <li class="px-4">3</li>
                    <li class="px-4">4</li>
                    <li class="px-4">5</li>
                    <li class="px-4">6</li>
                    <li class="px-4">7</li>
                    <li class="px-4">8</li>
                    <li class="px-4">9</li>
                    <div class="rounded-full bg-orange-500 text-orange-100">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </ul>
            </div>

        </div>

    </div>
</div>
</template>

<script>
export default {
    name: "pink-tabs",

    data() {
        return {
            openTab: 2,
            showModal: false,
            buttonAddProduct: true,
            buttonEditCompany: false
        }
    },

    methods: {
        toggleTabs: function (tabNumber) {
            this.openTab = tabNumber;
            if (this.openTab == 2) {
                this.buttonAddProduct = true;
                this.buttonEditCompany = false;
            } else {
                this.buttonEditCompany = true;
                this.buttonAddProduct = false;
            }
        },
        toggleModal: function () {
            this.showModal = !this.showModal;
        }
    }
}
</script>
