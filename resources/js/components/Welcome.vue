<template>
<div>
    <div class="flex px-4 py-4 mt-4">

        <!-- SIDEBAR (be a modal when clicked on one of the button) -->
        <div class="bg-white h-full w-64 rounded-lg mr-6 shadow" :class="{'relative': showModal, 'inset-0':showModal, 'z-50': showModal}">

            <div class="bg-blue-500 rounded-t-lg h-12">
                <p class="px-8 py-3 text-gray-100 font-semibold">
                    Filter
                </p>
            </div>

            <div class="px-6 mb-3 mt-3">
                <p class="py-2 text-gray-800 font-semibold leading-tight">Provinsi</p>
                <button @click="provinsiModal()" type="button" id="btn-prop" class="w-full flex justify-between leading-tight py-2 px-4 border rounded shadow-xs border-gray-400 text-left">
                    <P class="text-sm text-gray-700">Show All</P>
                    <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="px-6 mb-3 mt-3">
                <p class="py-2 text-gray-800 font-semibold leading-tight">Kabupaten</p>
                <button type="button" class="w-full flex justify-between leading-tight py-2 px-4 border rounded shadow-xs border-gray-400 text-left">
                    <P class="text-sm text-gray-700">Show All</P>
                    <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="px-6 mb-3 mt-3">
                <p class="py-2 text-gray-800 font-semibold leading-tight">Category</p>
                <button type="button" class="w-full flex justify-between leading-tight py-2 px-4 border rounded shadow-xs border-gray-400 text-left">
                    <P class="text-sm text-gray-700">Show All</P>
                    <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="px-6 mb-8 mt-3">
                <p class="py-2 text-gray-800 font-semibold leading-tight">Sub Category</p>
                <button type="button" class="w-full flex justify-between leading-tight py-2 px-4 border rounded shadow-xs border-gray-400 text-left">
                    <P class="text-sm text-gray-700">Show All</P>
                    <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

        </div>

        <div v-if="showModal" class="h-full w-full" :class="{'relative': showModal, 'inset-0':showModal, 'z-50': showModal}">
            <div class="bg-white border-0 rounded-lg shadow-lg px-6 py-4">
                <div class="grid grid-cols-5 gap-2">
                    <div>
                        <p class="font-semibold text-lg">Sumatera</p>
                        <div class="flex flex-col text-sm text-gray-600 mt-2 font-semibold">
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Jawa</p>
                        <div class="flex flex-col text-sm text-gray-600 mt-2 font-semibold">
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Kalimantan</p>
                        <div class="flex flex-col text-sm text-gray-600 mt-2 font-semibold">
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Sulawesi</p>
                        <div class="flex flex-col text-sm text-gray-600 mt-2 font-semibold">
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Papua</p>
                        <div class="flex flex-col text-sm text-gray-600 mt-2 font-semibold">
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                        </div>
                    </div>
                </div>

                <div class="w-full border-t border-gray-400 my-6"></div>
                <div class="grid grid-cols-5 gap-2">
                    <div>
                        <p class="font-semibold text-lg">Nusa Tenggara</p>
                        <div class="flex flex-col text-sm text-gray-600 mt-2 font-semibold">
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Maluku</p>
                        <div class="flex flex-col text-sm text-gray-600 mt-2 font-semibold">
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold text-lg">Bali</p>
                        <div class="flex flex-col text-sm text-gray-600 mt-2 font-semibold">
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                            <span>Aceh</span>
                            <span>Sumatera Utara</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full" v-if="!showModal">

            <!-- PRODUCT PAGE DESCRIPTIONS -->
            <div class="flex justify-between items-center">
                <p class="leading-tight text-sm">Menampilkan 12 produk dari +100 ribu produk yang ada di <span class="font-bold">Katalogi</span></p>
                <div class="flex justify-between items-center">
                    <p class="mr-2 text-sm">Urutkan :</p>
                    <button type="button" class="bg-white w-48 flex justify-between leading-tight text-sm py-2 px-4 border rounded border-gray-400 text-left">
                        <p>Paling sesuai</p>
                        <svg class="w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                </div>
            </div>

            <!-- PRODUCTS  -->
            <div class="mt-8 grid grid-cols-5 gap-2">
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

            <!-- PAGINATION -->
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

    <!-- DIV AFTER MODAL SHOW UP -->
    <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>

</div>
</template>

<script>
export default {
    data() {
        return {
            showModal: false
        }
    },
    methods: {
        provinsiModal: function () {
            this.showModal = !this.showModal;
        }
    },
}
</script>
