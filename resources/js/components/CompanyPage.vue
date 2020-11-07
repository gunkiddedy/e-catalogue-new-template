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
                    <div v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed inset-0 z-40 outline-none focus:outline-none justify-center items-center flex">
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

                                <div class="flex items-center justify-start mb-2">
                                    <h3 class="text-lg leading-tight font-semibold text-gray-400">
                                        Add New Product
                                    </h3>
                                    <div v-if="status_msg" :class="{'bg-green-400': status, 'bg-red-400': !status }" class="text-white shadow-sm flex items-center ml-4 text-sm font-bold px-3 py-1 rounded w-1/2" role="alert">
                                        <svg class="fill-current w-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                        </svg>
                                        <p>{{ status_msg }}</p>
                                    </div>
                                </div>

                                <!--body-->
                                <!--<div v-if="status_msg" :class="{ 'text-green-400': status, 'text-red-400': !status }">
                                    <span>{{ status_msg }}</span>
                                </div>-->

                                <form>
                                    <div class="grid grid-cols-2 gap-4 h-full">
                                        <!-- LEFT SIDE-->
                                        <div class="left w-full h-full py-2">
                                            <div class="product-name mb-3">
                                                <input id="name" v-model="name" class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Product Name">
                                            </div>
                                            <div class="grid grid-rows-2">
                                                <div class="flex mb-3 items-center justify-between">
                                                    <div class="w-1/12">
                                                        <input true-value="1" false-value="0" type="checkbox" name="sni" id="sni" v-model="sni" class="rounded-lg">
                                                    </div>
                                                    <label for="sni" class="text-gray-500 font-semibold w-1/6 mr-4">
                                                        SNI
                                                    </label>
                                                    <div class="w-full">
                                                        <input name="nomor_sni" id="nomor_sni" v-model="nomor_sni" type="text" placeholder="SNI Number" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                                    </div>
                                                </div>
                                                <div class="flex mb-3 items-center justify-between">
                                                    <div class="w-1/12">
                                                        <input type="checkbox" true-value="1" false-value="0" name="tkdn" id="tkdn" v-model="tkdn" class="rounded-lg">
                                                    </div>
                                                    <label for="tkdn" class="text-gray-500 font-semibold w-1/6 mr-4">
                                                        TKDN
                                                    </label>
                                                    <div class="w-full">
                                                        <input name="nilai_tkdn" id="nilai_tkdn" v-model="nilai_tkdn" type="text" placeholder="Nilai TKDN" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-2/4">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-rows-2">
                                                <div class="flex mb-3 items-center justify-between">
                                                    <div class="w-1/12">
                                                        &nbsp;
                                                    </div>
                                                    <div class="font-semibold text-lg w-1/6 mr-4">
                                                        &nbsp;
                                                    </div>
                                                    <div class="w-full">
                                                        <input v-model="nomor_sertifikat_tkdn" name="nomor_sertifikat_tkdn" id="nomor_sertifikat_tkdn" type="text" placeholder="Nomor Sertifikat TKDN" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                                    </div>
                                                </div>
                                                <div class="flex mb-3 items-center justify-between">
                                                    <div class="w-1/12">
                                                        &nbsp;
                                                    </div>
                                                    <div class="font-semibold text-lg w-1/6 mr-4">
                                                        &nbsp;
                                                    </div>
                                                    <div class="w-full">
                                                        <input name="nomor_laporan_tkdn" v-model="nomor_laporan_tkdn" id="nomor_laporan_tkdn" type="text" placeholder="Nomor Laporan" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-rows-1">
                                                <div class="flex mb-3 items-center justify-between">
                                                    <div class="text-gray-500 w-26-persen font-semibold mr-4">
                                                        HS Code
                                                    </div>
                                                    <div class="w-full">
                                                        <input name="hs_code" id="hs_code" v-model="hs_code" type="text" placeholder="ex. 0987789009876" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- RIGHT SIDE-->
                                        <div class="right w-full h-full py-2">

                                            <div class="grid grid-rows-2">
                                                <div class="product-name mb-3">
                                                    <div class="inline-block relative w-full">
                                                        <select name="category_id" id="category_id" v-model="select_category" @change="loadSubCategory" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-3 pr-8 rounded-lg text-gray-500 leading-tight focus:outline-none">
                                                            <option value="" selected="selected">
                                                                -Select Category-
                                                            </option>
                                                            <option v-for="(cat, i) in categories" :value="cat.id" :key="i">
                                                                {{cat.name}}
                                                            </option>
                                                        </select>
                                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-name mb-3">
                                                    <div class="inline-block relative w-full">
                                                        <select name="subcategory_id" id="subcategory_id" v-model="select_subcategory" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-3 pr-8 rounded-lg text-gray-500 leading-tight focus:outline-none">
                                                            <option value="" selected="selected">
                                                                -Select Sub Category-
                                                            </option>
                                                            <option v-for="(subc, i) in subcategories" :key="i" :value="subc.id">
                                                                {{subc.name}}
                                                            </option>
                                                        </select>
                                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="description mb-3">
                                                <textarea name="description" id="description" v-model="description" placeholder="Tulis deskripsi produk" class="h-30 rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full"></textarea>
                                            </div>

                                            <div class="flex mb-3 items-center justify-between">
                                                <!--<span class="font-semibold mr-4">Rp</span>-->
                                                <div class="w-full">
                                                    <input type="text" name="price" id="price" v-model="price" placeholder="Masukkan harga" class="rounded-lg py-3 px-4 text-gray-700 border border-gray-300 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full">
                                                </div>
                                            </div>

                                            <div class="mb-1">
                                                <span class="text-gray-500 text-sm font-semibold">
                                                    *Upload max 5 photos</span>
                                            </div>

                                            <div class="button-plus-upload flex px-4 justify-between items-center mb-3">
                                                <div class>
                                                    <el-upload action="#" list-type="picture-card" :on-preview="handlePreview" :on-change="updateImageList" :limit="5" :on-exceed="handleExceed" :on-remove="handleRemove" :auto-upload="false">
                                                        <i class="el-icon-plus" />
                                                    </el-upload>
                                                    <el-dialog :visible.sync="dialogVisible">
                                                        <img width="100%" :src="dialogImageUrl" alt>
                                                    </el-dialog>
                                                </div>
                                            </div>

                                            <div class="flex items-center justify-end">
                                                <button :class="{'disabled': isCreatingPost}" class="flex items-center text-white border border-blue-500 bg-blue-500 hover:text-gray-100 font-bold text-sm px-6 py-1 rounded focus:outline-none" type="button" @click="createPost">
                                                    <svg v-if="isCreatingPost" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                    </svg>
                                                    {{ isCreatingPost ? "Submitting..." : "Submit Product" }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- DIV AFTER MODAL SHOW UP -->
                    <div v-if="showModal" class="opacity-25 fixed inset-0 z-30 bg-black"></div>
                </div>
            </div>

            <!-- PRODUCT CARD -->
            <div class="mt-8 grid grid-cols-5 gap-2" :class="{'hidden': openTab !== 2, 'block': openTab === 2}">
                <div class="text-gray-700 rounded-lg bg-white shadow-md h-72 relative">
                    <img src="/img/login-img.png" alt="" class="rounded-t-lg">
                    <div class="absolute px-4 py-4 bg-white rounded-md leading-tight hover:transition duration-300 ease-in-out h-30 -mt-2 overflow-y-hidden hover:h-72 hover:-mt-41">
                        <p class="normal-case mb-6 font-bold text-sm leading-tight h-2.25rem">
                            Customized Pre-filter untuk Blower dan FFU
                        </p>
                        <p class="uppercase text-gray-600 leading-tight text-xs h-2.25rem">
                            pt. maju jaya prima perkasa abadi
                        </p>
                        <div>
                            <p class="mt-2 mb-2 text-xs text-gray-500">
                                Jakarta Barat
                            </p>

                            <div class="flex items-center justify-start mb-2">
                                <div class="rounded-full w-6 h-6 bg-gray-500 flex justify-around items-center px-2 py-2 mr-2">
                                    <p class="text-gray-200 text-xs">SNI</p>
                                </div>
                                <span class="text-white bg-green-400 rounded px-1 py-1 text-xs leading-none tracking-normal">
                                    trusted suplier
                                </span>
                                <!--<span class="text-white bg-red-400 rounded px-1 py-1 text-xs leading-none tracking-normal">
                                    not trusted suplier
                                </span>-->
                            </div>

                            <p class="font-bold mb-2">
                                <span class="text-red-500 font-bold">Rp250.000</span>
                                <span class="text-sm">/pc</span>
                            </p>
                            <p class="text-xs mb-4 text-gray-500">
                                Visit in order to contact the seller
                            </p>
                            <a href="/product-detail">
                                <button type="button" class="hover:bg-blue-700 bg-blue-600 px-6 py-2 w-full rounded-lg ">
                                    <p class="text-white leading-none font-bold text-sm">See Product</p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

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
    name: 'company-page',
    data() {
        return {
            openTab: 2,
            showModal: false,
            buttonAddProduct: true,
            buttonEditCompany: false,

            // show_sni: false,
            // show_tkdn: false,
            // isRequiredSNI: false,
            // isRequiredTKDN: false,
            // nomor_sni: '',
            // nilai_tkdn: '',
            // nomor_sertifikat_tkdn: '',
            // nomor_laporan_tkdn: '',
            // required: '',
            // sni: '',
            // errors: '',
            // errors_nilai_tkdn: '',
            // errors_nomor_sertifikat_tkdn: '',
            // errors_nomor_laporan_tkdn: '',
            // isSuccess: false,
            // isError: true,
            // isSuccess_nil: false,
            // isError_nil: true,
            // isSuccess_ser: false,
            // isError_ser: true,
            // isSuccess_lap: false,
            // isError_lap: true,
            categories: [],
            subcategories: [],

            dialogImageUrl: '',
            dialogVisible: false,
            isCreatingPost: false,
            status_msg: '',
            status: '',
            name: '',
            description: '',
            sni: 0,
            nomor_sni: '',
            tkdn: 0,
            nilai_tkdn: '',
            nomor_sertifikat_tkdn: '',
            nomor_laporan_tkdn: '',
            hs_code: '',
            select_category: '',
            select_subcategory: '',
            price: '',
            imageList: [],
            images: []
        }
    },

    created() {
        this.loadCategory();
    },

    methods: {

        updateImageList(file) {
            this.imageList.push(file.raw);
            console.log(this.imageList);
        },
        handleRemove(file, imageList) {
            console.log(imageList);
        },
        handlePreview(file) {
            this.dialogImageUrl = file.url
            this.dialogVisible = true
        },
        handleExceed(files, imageList) {
            this.$message.warning(`The limit is 5, you selected ${files.length} files this time, add up to ${files.length + imageList.length} totally`);
        },

        createPost(e) {
            e.preventDefault()
            if (!this.validateForm()) {
                return false
            }
            // const that = this
            this.isCreatingPost = true;
            const formData = new FormData();

            formData.append('name', this.name);
            formData.append('description', this.description);
            formData.append('sni', this.sni);
            formData.append('nomor_sni', this.nomor_sni);
            formData.append('tkdn', this.tkdn);
            formData.append('nilai_tkdn', this.nilai_tkdn);
            formData.append('nomor_sertifikat_tkdn', this.nomor_sertifikat_tkdn);
            formData.append('nomor_laporan_tkdn', this.nomor_laporan_tkdn);
            formData.append('hs_code', this.hs_code);
            formData.append('price', this.price);
            formData.append('category_id', this.select_category);
            formData.append('subcategory_id', this.select_subcategory);

            this.imageList.forEach(file => {
                formData.append('images[]', file, file.name);
            });

            // $.each(this.imageList, function (key, image) {
            //     formData.append(`images[${key}]`, image);
            // });

            axios.post('/api/add-product', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then((res) => {
                console.log(res);
                this.name = this.name = '';
                this.description = this.description = '';
                this.sni = this.sni = '';
                this.nomor_sni = this.nomor_sni = '';
                this.tkdn = this.tkdn = '';
                this.nilai_tkdn = this.nilai_tkdn = '';
                this.nomor_sertifikat_tkdn = this.nomor_sertifikat_tkdn = '';
                this.nomor_laporan_tkdn = this.nomor_laporan_tkdn = '';
                this.hs_code = this.hs_code = '';
                this.price = this.price = '';
                this.select_category = this.select_category = '';
                this.select_subcategory = this.select_subcategory = '';
                this.status = true;
                this.showNotification('Product Successfully Added');
                this.isCreatingPost = false;
                this.imageList = [];
            }).catch((error) => {
                console.log(error);
            });
        },

        validateForm() {
            if (this.imageList.length < 0) {
                this.status = false
                this.showNotification('Image Product cannot be empty')
                return false
            }
            if (!this.name) {
                this.status = false
                this.showNotification('name cannot be empty')
                return false
            }
            if (!this.description) {
                this.status = false
                this.showNotification('description cannot be empty')
                return false
            }
            return true
        },
        showNotification(message) {
            this.status_msg = message
            setTimeout(() => {
                this.status_msg = ''
            }, 5000)
        },

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
        },

        loadCategory: function () {
            axios.get('/api/getcategories')
                .then((response) => {
                    this.categories = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        loadSubCategory: function () {
            axios.get('/api/getsubcategories', {
                    params: {
                        category_id: this.select_category
                    }
                })
                .then((response) => {
                    this.subcategories = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        checkNilaiTKDN: _.debounce(function () {
            let regex = /\d{2}(\.\d{2})?$/;

            let value = regex.test(this.nilai_tkdn);
            if (value == false) {
                this.nilai_tkdn = null;
                this.isError_nil = true;
                this.isSuccess_nil = false;
                this.errors_nilai_tkdn = 'format tidak valid! example(0.00 atau 100.00)';
            } else {
                this.isSuccess_nil = true;
                this.isError_nil = false;
                this.errors_nilai_tkdn = 'format valid';
            }
            return
        }, 2000),

        checkSertiTKDN: _.debounce(function (check_value) {
            let searchRegExp = /[^\w\.\/\:\,\-]+/;
            let valid = check_value.replace(searchRegExp, '');
            this.nomor_sertifikat_tkdn = valid;
            console.log(valid);
            return
        }, 2000),

        checkLapTKDN: _.debounce(function (check_value) {
            let searchRegExp = /[^\w\.\/\:\,\-]+/;
            let valid = check_value.replace(searchRegExp, '');
            this.nomor_laporan_tkdn = valid;
            return
        }, 2000),

        checkSNI: _.debounce(function (check_value) {
            let searchRegExp = /[^\w\.\/\:\,\-]+/;
            let valid = check_value.replace(searchRegExp, '');
            this.nomor_sni = valid;
            return
        }, 2000),

        showSNI: function () {
            this.show_sni = !this.show_sni;
            this.required = 'required';
        },
        showTKDN: function () {
            this.show_tkdn = !this.show_tkdn;
            this.required = 'required';
        }

    }
}
</script>

<style>
.el-upload--picture-card {
    background-color: #fbfdff;
    border: 1px dashed #c0ccda;
    border-radius: 6px;
    box-sizing: border-box;
    width: 4rem;
    height: 4rem;
    line-height: 74px;
    vertical-align: top;
}

.el-upload-list--picture-card .el-upload-list__item {
    overflow: hidden;
    background-color: #fff;
    border: 1px solid #c0ccda;
    border-radius: 6px;
    box-sizing: border-box;
    width: 4rem;
    height: 4rem;
    margin: 0 8px 8px 0;
    display: inline-block;
}
</style>
